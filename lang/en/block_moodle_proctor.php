<?php
defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Moodle Proctor block';
$string['privacy:metadata'] = 'The block displays proctoring status only. Personal data is stored by local_moodle_proctor.';

$string['status_heading'] = 'Proctoring status';
$string['storage_ready'] = 'Storage configured';
$string['storage_notready'] = 'Storage not configured (contact administrator)';
$string['enrollment_complete'] = 'Identity verification complete';
$string['enrollment_pending'] = 'Identity verification pending (ID card + face)';
$string['enrollment_pending_help'] = 'Before a proctored exam you must register your Chilean ID card and face. We recommend a mobile phone (rear camera) over HTTPS.';
$string['enrollment_link'] = 'Verify identity (ID card + face)';
$string['extension_required'] = 'Browser extension required for proctored exams';
$string['extension_install_link'] = 'Install browser extension';
$string['staff_tools_heading'] = 'Staff tools (manager/admin)';
$string['sandbox_link'] = 'Test proctoring (sandbox)';
$string['reports_link'] = 'Proctoring reports';
$string['notconfigured'] = 'Moodle Proctor is not configured on this site.';
$string['settings_info_heading'] = 'Configuration';
$string['settings_info_desc'] = 'Main proctoring, storage, RUT and identity settings are in <a href="/admin/settings.php?section=local_moodle_proctor_settings">Local plugins → Moodle Proctor</a>.';
