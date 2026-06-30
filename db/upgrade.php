<?php
defined('MOODLE_INTERNAL') || die();

function xmldb_block_moodle_proctor_upgrade($oldversion) {
    if ($oldversion < 2026062551) {
        upgrade_plugin_savepoint(true, 2026062551, 'block', 'moodle_proctor');
    }

    return true;
}
