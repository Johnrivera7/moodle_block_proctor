<?php
defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Bloque Moodle Proctor';
$string['privacy:metadata'] = 'El bloque solo muestra el estado de supervisión. Los datos personales los almacena local_moodle_proctor.';

$string['status_heading'] = 'Estado de supervisión';
$string['storage_ready'] = 'Almacenamiento configurado';
$string['storage_notready'] = 'Almacenamiento no configurado (contacte al administrador)';
$string['enrollment_complete'] = 'Verificación de identidad completa';
$string['enrollment_pending'] = 'Verificación de identidad pendiente (cédula + rostro)';
$string['enrollment_pending_help'] = 'Antes del examen debe registrar su cédula chilena y rostro. Recomendamos usar el celular (cámara trasera) con HTTPS.';
$string['enrollment_link'] = 'Verificar identidad (cédula + rostro)';
$string['extension_required'] = 'Se requiere extensión de navegador para exámenes supervisados';
$string['extension_install_link'] = 'Instalar extensión de navegador';
$string['staff_tools_heading'] = 'Herramientas (gestor/admin)';
$string['sandbox_link'] = 'Probar proctoring (sandbox)';
$string['reports_link'] = 'Informes de supervisión';
$string['notconfigured'] = 'Moodle Proctor no está configurado en este sitio.';
$string['settings_info_heading'] = 'Configuración';
$string['settings_info_desc'] = 'La configuración principal de supervisión, almacenamiento, RUT y verificación de identidad está en <a href="/admin/settings.php?section=local_moodle_proctor_settings">Plugins locales → Moodle Proctor</a>.';
