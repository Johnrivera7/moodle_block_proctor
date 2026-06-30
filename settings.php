<?php
defined('MOODLE_INTERNAL') || die();

/**
 * @package    block_moodle_proctor
 * @copyright  2026 John Rivera
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once($CFG->dirroot . '/local/moodle_proctor/lib.php');

if ($hassiteconfig && !empty($settings)) {
    local_moodle_proctor_add_author_settings(
        $settings,
        'block_moodle_proctor',
        'https://github.com/Johnrivera7/moodle_block_proctor'
    );

    $settings->add(new admin_setting_description(
        'block_moodle_proctor/info',
        get_string('settings_info_heading', 'block_moodle_proctor'),
        get_string('settings_info_desc', 'block_moodle_proctor')
    ));
}
