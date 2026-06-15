<?php
// This file is part of Moodle - http://moodle.org/
//
// @package    block_moodle_proctor
// @copyright  2026 John Rivera
// @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later

namespace block_moodle_proctor\privacy;

defined('MOODLE_INTERNAL') || die();

class provider implements \core_privacy\local\metadata\null_provider {

    public static function get_reason(): string {
        return 'privacy:metadata';
    }
}
