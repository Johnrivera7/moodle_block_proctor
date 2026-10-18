<?php
defined('MOODLE_INTERNAL') || die();

/**
 * @package    block_moodle_proctor
 * @copyright  2026 John Rivera
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once($CFG->dirroot . '/local/moodle_proctor/lib.php');

class block_moodle_proctor extends block_base {

    public function init() {
        $this->title = get_string('pluginname', 'block_moodle_proctor');
    }

    public function applicable_formats() {
        return ['course' => true, 'my' => false];
    }

    public function instance_allow_multiple() {
        return false;
    }

    public function get_content() {
        global $USER, $COURSE, $OUTPUT, $PAGE;

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass();
        $this->content->text = '';
        $this->content->footer = '';

        if (empty($USER->id) || isguestuser()) {
            return $this->content;
        }

        if (!local_moodle_proctor_is_configured()) {
            $this->content->text = $OUTPUT->notification(
                get_string('notconfigured', 'block_moodle_proctor'),
                'warning'
            );
            return $this->content;
        }

        $context = context_course::instance($COURSE->id);
        if (!has_capability('block/moodle_proctor:view', $context)) {
            return $this->content;
        }

        $enrollment = new \local_moodle_proctor\enrollment_manager();
        $complete = $enrollment->is_complete($USER->id, $COURSE->id);
        // Tell "never verified" apart from "verification expired", and when a valid one expires.
        $record = $enrollment->find((int) $USER->id, (int) $COURSE->id);
        $verified = $record && (int) $record->status === \local_moodle_proctor\enrollment_manager::STATUS_COMPLETE;
        $expired = $verified && \local_moodle_proctor\enrollment_manager::is_expired($record);
        $days = \local_moodle_proctor\enrollment_manager::validity_days();
        $validuntil = ($complete && $verified && $days > 0)
            ? userdate((int) $record->timemodified + $days * DAYSECS, get_string('strftimedate', 'langconfig')) : '';
        $config = local_moodle_proctor_get_config();
        $requires = !empty($config->requireenrollment)
            && local_moodle_proctor_user_requires_enrollment((int) $USER->id, (int) $COURSE->id);
        $systemcontext = context_system::instance();
        $canmanage = has_capability('local/moodle_proctor:manage', $systemcontext);
        $canreports = has_capability('local/moodle_proctor:viewreports', $context);

        $returnurl = null;
        if (!empty($PAGE->url) && $PAGE->url instanceof moodle_url) {
            $returnurl = $PAGE->url;
        } else if (!empty($COURSE->id)) {
            $returnurl = new moodle_url('/course/view.php', ['id' => (int) $COURSE->id]);
        }

        $data = (object) [
            'complete' => $requires ? $complete : true,
            'expired' => $requires && $expired,
            'validuntil' => $validuntil,
            'enrollmenturl' => local_moodle_proctor_enrollment_url(
                (int) $COURSE->id,
                $returnurl
            )->out(false),
            // Chrome Web Store when configured (2 clicks), else the guided install page.
            'extensioninstallurl' => trim((string) ($config->extensionstoreurl ?? '')) !== ''
                ? trim((string) $config->extensionstoreurl)
                : (new moodle_url('/local/moodle_proctor/extension_install.php', [
                    'courseid' => $COURSE->id,
                ]))->out(false),
            'extensionstore' => trim((string) ($config->extensionstoreurl ?? '')) !== '',
            'sandboxurl' => (new moodle_url('/local/moodle_proctor/sandbox.php', [
                'courseid' => $COURSE->id,
            ]))->out(false),
            'reportsurl' => (new moodle_url('/local/moodle_proctor/reports.php', [
                'courseid' => $COURSE->id,
            ]))->out(false),
            'identityreporturl' => (new moodle_url('/local/moodle_proctor/identity_report.php', [
                'courseid' => $COURSE->id,
            ]))->out(false),
            'violationsurl' => (new moodle_url('/local/moodle_proctor/violations.php', [
                'courseid' => $COURSE->id,
            ]))->out(false),
            'requireenrollment' => $requires,
            'storageok' => local_moodle_proctor_is_configured(),
            'enableextension' => !empty($config->enableextension),
            'canmanage' => $canmanage,
            'canreports' => $canreports,
            'showstafftools' => $canmanage || $canreports,
        ];

        if (!empty($config->enableextension)) {
            $this->page->requires->js_call_amd('local_moodle_proctor/extension_status', 'init');
        }
        $this->content->text = $OUTPUT->render_from_template('block_moodle_proctor/status', $data);
        return $this->content;
    }
}
