# Moodle Proctor — Block

[![Moodle](https://img.shields.io/badge/Moodle-5.2%2B-orange?style=flat-square&logo=moodle)](https://moodle.org)
[![PHP](https://img.shields.io/badge/PHP-8.5%2B-777BB4?style=flat-square&logo=php&logoColor=white)](https://www.php.net)
[![License](https://img.shields.io/badge/License-GPL--3.0-blue?style=flat-square)](LICENSE)
[![Branch](https://img.shields.io/badge/Branch-MOODLE__52-green?style=flat-square)](https://github.com/Johnrivera7/moodle_block_proctor/tree/MOODLE_52)
[![Depends on](https://img.shields.io/badge/Requires-local__moodle__proctor-red?style=flat-square)](https://github.com/Johnrivera7/moodle_proctor)
[![Version](https://img.shields.io/badge/Version-1.1.0-informational?style=flat-square)](version.php)

Bloque de curso con **estado de supervisión**, enlace a **enrollment** e **instalación de extensión**.

| | |
|---|---|
| **Componente** | `block_moodle_proctor` |
| **Instalación** | `blocks/moodle_proctor/` |
| **Rama** | **`MOODLE_52`** — Moodle 5.2+ / PHP 8.5+ |

> Moodle 4.5: rama [`MOODLE_45`](https://github.com/Johnrivera7/moodle_block_proctor/tree/MOODLE_45)

---

## Requisitos

| Requisito | Versión |
|-----------|---------|
| Moodle | **5.2+** |
| PHP | **8.5+** |
| Plugin núcleo | `local_moodle_proctor` rama **MOODLE_52** |

---

## Instalación

```bash
cd /path/to/moodle/blocks
git clone -b MOODLE_52 https://github.com/Johnrivera7/moodle_block_proctor.git moodle_proctor
```

---

## Uso

1. **Añadir bloque → Moodle Proctor** en el curso
2. Semáforo: almacenamiento, enrollment, extensión
3. Botones: **Completar enrollment** / **Instalar extensión**

---

## Suite MOODLE_52

| Repo | Rol |
|------|-----|
| [moodle_proctor](https://github.com/Johnrivera7/moodle_proctor/tree/MOODLE_52) | Núcleo |
| [moodle_quizaccess_proctor](https://github.com/Johnrivera7/moodle_quizaccess_proctor/tree/MOODLE_52) | Quiz |
| **moodle_block_proctor** | ← Bloque |
| [moodle_proctor_python](https://github.com/Johnrivera7/moodle_proctor_python/tree/MOODLE_52) | Python |
| [moodle_proctor_extension](https://github.com/Johnrivera7/moodle_proctor_extension/tree/MOODLE_52) | Extensión |

---

## Licencia

GPL-3.0+ — [LICENSE](LICENSE)
