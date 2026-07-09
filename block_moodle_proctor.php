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
        require_capability('block/moodle_proctor:view', $context);

        $enrollment = new \local_moodle_proctor\enrollment_manager();
        $complete = $enrollment->is_complete($USER->id, $COURSE->id);
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
            'enrollmenturl' => local_moodle_proctor_enrollment_url(
                (int) $COURSE->id,
                $returnurl
            )->out(false),
            'extensioninstallurl' => (new moodle_url('/local/moodle_proctor/extension_install.php', [
                'courseid' => $COURSE->id,
            ]))->out(false),
            'sandboxurl' => (new moodle_url('/local/moodle_proctor/sandbox.php', [
                'courseid' => $COURSE->id,
            ]))->out(false),
            'reportsurl' => (new moodle_url('/local/moodle_proctor/reports.php', [
                'courseid' => $COURSE->id,
            ]))->out(false),
            'identityreporturl' => (new moodle_url('/local/moodle_proctor/identity_report.php', [
                'courseid' => $COURSE->id,
            ]))->out(false),
            'requireenrollment' => $requires,
            'storageok' => local_moodle_proctor_is_configured(),
            'enableextension' => !empty($config->enableextension),
            'canmanage' => $canmanage,
            'canreports' => $canreports,
        ];

        $this->content->text = $OUTPUT->render_from_template('block_moodle_proctor/status', $data);
        return $this->content;
    }
}
