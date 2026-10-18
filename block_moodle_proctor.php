<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

defined('MOODLE_INTERNAL') || die();

/**
 * Moodle Proctor block.
 *
 * @package    block_moodle_proctor
 * @copyright  2026 John Rivera <https://github.com/Johnrivera7>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once($CFG->dirroot . '/local/moodle_proctor/lib.php');

/**
 * Block showing the student's Moodle Proctor identity verification status and staff tools.
 *
 * @package    block_moodle_proctor
 * @copyright  2026 John Rivera <https://github.com/Johnrivera7>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_moodle_proctor extends block_base {
    /**
     * Set the block title.
     */
    public function init() {
        $this->title = get_string('pluginname', 'block_moodle_proctor');
    }

    /**
     * The block can be added to course pages only.
     *
     * @return array
     */
    public function applicable_formats() {
        return ['course' => true, 'my' => false];
    }

    /**
     * Only one instance of the block is allowed per page.
     *
     * @return bool
     */
    public function instance_allow_multiple() {
        return false;
    }

    /**
     * Build the block content: verification status, browser extension and staff links.
     *
     * @return stdClass
     */
    public function get_content() {
        global $USER, $COURSE, $OUTPUT;

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
        if (!empty($this->page->url) && $this->page->url instanceof moodle_url) {
            $returnurl = $this->page->url;
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
