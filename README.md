# Moodle Proctor — Block

[![Moodle](https://img.shields.io/badge/Moodle-5.0%2B-orange?style=flat-square&logo=moodle)](https://moodle.org)
[![PHP](https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=flat-square&logo=php&logoColor=white)](https://www.php.net)
[![License](https://img.shields.io/badge/License-GPL--3.0-blue?style=flat-square)](LICENSE)
[![Branch](https://img.shields.io/badge/Branch-MOODLE__50-green?style=flat-square)](https://github.com/Johnrivera7/moodle_block_proctor/tree/MOODLE_50)
[![Depends on](https://img.shields.io/badge/Requires-local__moodle__proctor-red?style=flat-square)](https://github.com/Johnrivera7/moodle_proctor)
[![Version](https://img.shields.io/badge/Version-1.6.0-informational?style=flat-square)](version.php)

Bloque de curso con **estado de supervisión**, enlace a **verificación de identidad** (cédula + rostro), **informe de identidad facial** para docentes y **sandbox** para gestores/administradores.

| | |
|---|---|
| **Autor** | [John Rivera](https://github.com/Johnrivera7) |
| **Contacto** | [johnriveragonzalez7@gmail.com](mailto:johnriveragonzalez7@gmail.com) |
| **Componente** | `block_moodle_proctor` |
| **Instalación** | `blocks/moodle_proctor/` |
| **Repositorio** | https://github.com/Johnrivera7/moodle_block_proctor |
| **Rama** | **`MOODLE_50`** — Moodle 5.0 / 5.1 / PHP 8.2+ |

> Moodle **5.2+**: rama [`MOODLE_52`](https://github.com/Johnrivera7/moodle_block_proctor/tree/MOODLE_52). Moodle 4.5: [`MOODLE_45`](https://github.com/Johnrivera7/moodle_block_proctor/tree/MOODLE_45).

---

## Requisitos

| Requisito | Versión |
|-----------|---------|
| Moodle | **5.0+** |
| PHP | **8.2+** |
| Plugin núcleo | [`local_moodle_proctor`](https://github.com/Johnrivera7/moodle_proctor/tree/MOODLE_50) **v1.6.0+** |

---

## Instalación

```bash
cd /path/to/moodle/blocks
git clone -b MOODLE_50 https://github.com/Johnrivera7/moodle_block_proctor.git moodle_proctor
```

**Administración → Notificaciones** (después de instalar `local_moodle_proctor`).

---

## Uso

1. **Añadir bloque → Moodle Proctor** en el curso
2. Semáforo: almacenamiento y verificación de identidad
3. Botón **Verificar identidad (cédula + rostro)** — flujo en navegador (recomendado **celular**, cámara trasera, HTTPS)
4. **Docentes/gestores** (`viewreports`): enlaces a **Informes de supervisión** e **Informe de identidad facial** (`/local/moodle_proctor/identity_report.php`)
5. **Gestores/admin:** sección *Herramientas* con enlace **Probar proctoring (sandbox)**

La configuración principal (almacenamiento, RUT, alertas live, Python embebido) está en **Plugins locales → Moodle Proctor**.

Ajustes del bloque: **Administración → Bloques → Moodle Proctor block**.

---

## Suite MOODLE_50

| Repo | Rol |
|------|-----|
| [moodle_proctor](https://github.com/Johnrivera7/moodle_proctor/tree/MOODLE_50) | Núcleo |
| [moodle_quizaccess_proctor](https://github.com/Johnrivera7/moodle_quizaccess_proctor/tree/MOODLE_50) | Quiz |
| **moodle_block_proctor** | ← Bloque |
| [moodle_proctor_python](https://github.com/Johnrivera7/moodle_proctor_python/tree/MOODLE_52) | Python |
| [moodle_proctor_extension](https://github.com/Johnrivera7/moodle_proctor_extension/tree/MOODLE_52) | Extensión |

---

## Licencia

GPL-3.0+ — [LICENSE](LICENSE)

## Soporte

- **Autor:** [John Rivera](https://github.com/Johnrivera7) · [johnriveragonzalez7@gmail.com](mailto:johnriveragonzalez7@gmail.com)
- **Issues:** https://github.com/Johnrivera7/moodle_block_proctor/issues
