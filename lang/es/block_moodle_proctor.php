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

/**
 * Strings for component 'block_moodle_proctor', language 'es'.
 *
 * @package    block_moodle_proctor
 * @copyright  2026 John Rivera <https://github.com/Johnrivera7>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Proctor Chile';
$string['privacy:metadata'] = 'El bloque solo muestra el estado de supervisión. Los datos personales los almacena local_moodle_proctor.';

$string['status_heading'] = 'Estado de supervisión';
$string['storage_ready'] = 'Supervisión lista (almacenamiento configurado)';
$string['storage_notready'] = 'Almacenamiento no configurado: contacte al administrador';
$string['enrollment_complete'] = 'Su identidad está verificada';
$string['enrollment_pending'] = 'Debe verificar su identidad antes de rendir los exámenes de este curso';
$string['enrollment_link'] = 'Verificar mi identidad';
$string['extension_required'] = 'Para los exámenes de este curso debe instalar una extensión en Chrome o Edge. No necesita configurarla.';
$string['extension_install_link'] = 'Instalar extensión';
$string['staff_tools_heading'] = 'Herramientas para docentes';
$string['sandbox_link'] = 'Probar proctoring (sandbox)';
$string['reports_link'] = 'Informes de supervisión';
$string['identity_report_link'] = 'Informe de identidad facial';
$string['notconfigured'] = 'Proctor Chile no está configurado en este sitio.';
$string['settings_info_heading'] = 'Configuración';
$string['settings_info_desc'] = 'La configuración principal de supervisión, almacenamiento, RUT y verificación de identidad está en <a href="/admin/settings.php?section=local_moodle_proctor_settings">Plugins locales → Proctor Chile</a>.';
$string['enrollment_complete_help'] = 'Ya puede rendir los exámenes supervisados de este curso. Durante el examen la cámara tomará fotos para confirmar que es usted.';
$string['enrollment_valid_until'] = 'Vigente hasta el {$a}.';
$string['enrollment_expired'] = 'Su verificación de identidad venció. Debe repetirla antes del próximo examen';
$string['enrollment_steps_intro'] = 'Son 5 pasos y toman unos 3 minutos:';
$string['enrollment_step_idcard'] = '<strong>Frente de la cédula:</strong> muéstrela a la cámara con la foto a la izquierda. Se captura sola.';
$string['enrollment_step_confirm'] = '<strong>Sus datos:</strong> revise que su RUT y su nombre estén correctos.';
$string['enrollment_step_face'] = '<strong>Su rostro:</strong> mire a la cámara y gire la cabeza hacia un lado y luego hacia el otro.';
$string['enrollment_step_qr'] = '<strong>Dorso de la cédula:</strong> muestre el código QR a unos 40 cm de la cámara.';
$string['enrollment_step_review'] = '<strong>Revisar y guardar:</strong> compruebe sus datos y fotos, y guarde la verificación.';
$string['enrollment_tips'] = 'Tenga su cédula a mano, use un lugar con buena luz, sin reflejos, y permita el acceso a la cámara cuando el navegador lo pida.';
$string['extension_checking'] = 'Comprobando la extensión del navegador…';
$string['extension_detected'] = 'Extensión del navegador instalada';
$string['extension_missing'] = 'Falta la extensión del navegador';
$string['extension_store_hint'] = 'Se abrirá la tienda de Chrome: pulse «Añadir a Chrome» y confirme. Luego recargue esta página.';
