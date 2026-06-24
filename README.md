# Moodle Proctor — Block

[![Moodle](https://img.shields.io/badge/Moodle-4.5%2B-orange?style=flat-square&logo=moodle)](https://moodle.org)
[![PHP](https://img.shields.io/badge/PHP-8.1%2B-777BB4?style=flat-square&logo=php&logoColor=white)](https://www.php.net)
[![License](https://img.shields.io/badge/License-GPL--3.0-blue?style=flat-square)](LICENSE)
[![Depends on](https://img.shields.io/badge/Requires-local__moodle__proctor-red?style=flat-square)](https://github.com/Johnrivera7/moodle_proctor)
[![Version](https://img.shields.io/badge/Version-1.0.0-informational?style=flat-square)](version.php)

Bloque de curso con **estado de supervisión** y enlace al **enrollment de proctoring**.

| | |
|---|---|
| **Componente** | `block_moodle_proctor` |
| **Instalación** | `blocks/moodle_proctor/` |
| **Repositorio** | https://github.com/Johnrivera7/moodle_block_proctor |
| **Autor** | [John Rivera](https://github.com/Johnrivera7) |

---

## Requisitos

| Requisito | Versión |
|-----------|---------|
| Moodle | 4.5+ |
| PHP | 8.1+ |
| Plugin núcleo | [`local_moodle_proctor`](https://github.com/Johnrivera7/moodle_proctor) |

---

## Instalación

```bash
cd /path/to/moodle/blocks
git clone -b MOODLE_45 https://github.com/Johnrivera7/moodle_block_proctor.git moodle_proctor
```

**Administración → Notificaciones**

---

## Uso en el curso

1. Activar edición en el curso
2. **Añadir un bloque → Moodle Proctor**
3. El bloque muestra:

| Indicador | Significado |
|-----------|-------------|
| 🟢 Almacenamiento configurado | disco OK |
| 🔴 Almacenamiento no configurado | Revisar admin |
| 🟢 Enrollment completo | Estudiante listo para examen |
| 🟡 Enrollment pendiente | Falta consentimiento + foto |
| 🔵 Extensión requerida | Instalar extensión Chrome |

4. Botón **Completar enrollment** si está pendiente

---

## Suite completa

| Repo | Rol |
|------|-----|
| [moodle_proctor](https://github.com/Johnrivera7/moodle_proctor) | Núcleo |
| [moodle_quizaccess_proctor](https://github.com/Johnrivera7/moodle_quizaccess_proctor) | Regla quiz |
| **moodle_block_proctor** | ← Este bloque |
| [moodle_proctor_python](https://github.com/Johnrivera7/moodle_proctor_python) | Python |
| [moodle_proctor_extension](https://github.com/Johnrivera7/moodle_proctor_extension) | Extensión |

---

## Licencia

GPL-3.0+ — [LICENSE](LICENSE)
