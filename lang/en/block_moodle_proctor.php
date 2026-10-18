<?php
defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Moodle Proctor block';
$string['privacy:metadata'] = 'The block displays proctoring status only. Personal data is stored by local_moodle_proctor.';

$string['status_heading'] = 'Proctoring status';
$string['storage_ready'] = 'Proctoring ready (storage configured)';
$string['storage_notready'] = 'Storage not configured: contact the administrator';
$string['enrollment_complete'] = 'Your identity is verified';
$string['enrollment_pending'] = 'You must verify your identity before taking the exams in this course';
$string['enrollment_link'] = 'Verify my identity';
$string['extension_required'] = 'For the exams in this course you must install an extension in Chrome or Edge. It needs no configuration.';
$string['extension_install_link'] = 'Install extension';
$string['staff_tools_heading'] = 'Teacher tools';
$string['sandbox_link'] = 'Test proctoring (sandbox)';
$string['reports_link'] = 'Proctoring reports';
$string['identity_report_link'] = 'Facial identity report';
$string['notconfigured'] = 'Moodle Proctor is not configured on this site.';
$string['settings_info_heading'] = 'Configuration';
$string['settings_info_desc'] = 'Main proctoring, storage, RUT and identity settings are in <a href="/admin/settings.php?section=local_moodle_proctor_settings">Local plugins → Moodle Proctor</a>.';
$string['enrollment_complete_help'] = 'You can now take the proctored exams in this course. During the exam the camera will take photos to confirm it is you.';
$string['enrollment_valid_until'] = 'Valid until {$a}.';
$string['enrollment_expired'] = 'Your identity verification has expired. Please repeat it before your next exam';
$string['enrollment_steps_intro'] = 'There are 5 steps and it takes about 3 minutes:';
$string['enrollment_step_idcard'] = '<strong>Front of your ID card:</strong> show it to the camera with the photo on the left. It is captured automatically.';
$string['enrollment_step_confirm'] = '<strong>Your details:</strong> check that your RUT and name are correct.';
$string['enrollment_step_face'] = '<strong>Your face:</strong> look at the camera and turn your head to one side, then to the other.';
$string['enrollment_step_qr'] = '<strong>Back of your ID card:</strong> show the QR code about 40 cm from the camera.';
$string['enrollment_step_review'] = '<strong>Review and save:</strong> check your details and photos, and save the verification.';
$string['enrollment_tips'] = 'Have your ID card at hand, use a well-lit place without glare, and allow camera access when the browser asks.';
$string['extension_checking'] = 'Checking the browser extension…';
$string['extension_detected'] = 'Browser extension installed';
$string['extension_missing'] = 'Browser extension missing';
$string['extension_store_hint'] = 'The Chrome Web Store will open: click "Add to Chrome" and confirm. Then reload this page.';
