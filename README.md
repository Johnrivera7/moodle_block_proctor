# Moodle Proctor — Block

[![Moodle](https://img.shields.io/badge/Moodle-5.2%2B-orange?style=flat-square&logo=moodle)](https://moodle.org)
[![PHP](https://img.shields.io/badge/PHP-8.5%2B-777BB4?style=flat-square&logo=php&logoColor=white)](https://www.php.net)
[![License](https://img.shields.io/badge/License-GPL--3.0-blue?style=flat-square)](LICENSE)
[![Branch](https://img.shields.io/badge/Branch-MOODLE__52-green?style=flat-square)](https://github.com/Johnrivera7/moodle_block_proctor/tree/MOODLE_52)
[![Depends on](https://img.shields.io/badge/Requires-local__moodle__proctor-red?style=flat-square)](https://github.com/Johnrivera7/moodle_proctor)
[![Version](https://img.shields.io/badge/Version-1.5.2-informational?style=flat-square)](version.php)

Bloque de curso con **estado de supervisión**, enlace a **verificación de identidad** (cédula + rostro) y **sandbox** para gestores/administradores.

| | |
|---|---|
| **Autor** | [John Rivera](https://github.com/Johnrivera7) |
| **Contacto** | [johnriveragonzalez7@gmail.com](mailto:johnriveragonzalez7@gmail.com) |
| **Componente** | `block_moodle_proctor` |
| **Instalación** | `blocks/moodle_proctor/` |
| **Repositorio** | https://github.com/Johnrivera7/moodle_block_proctor |
| **Rama** | **`MOODLE_52`** — Moodle 5.2+ / PHP 8.5+ |

> Moodle 4.5: rama [`MOODLE_45`](https://github.com/Johnrivera7/moodle_block_proctor/tree/MOODLE_45)

---

## Requisitos

| Requisito | Versión |
|-----------|---------|
| Moodle | **5.2+** |
| PHP | **8.5+** |
| Plugin núcleo | [`local_moodle_proctor`](https://github.com/Johnrivera7/moodle_proctor/tree/MOODLE_52) **v1.5.2+** |

---

## Instalación

```bash
cd /path/to/moodle/blocks
git clone -b MOODLE_52 https://github.com/Johnrivera7/moodle_block_proctor.git moodle_proctor
```

**Administración → Notificaciones** (después de instalar `local_moodle_proctor`).

---

## Uso

1. **Añadir bloque → Moodle Proctor** en el curso
2. Semáforo: almacenamiento y verificación de identidad
3. Botón **Verificar identidad (cédula + rostro)** — flujo en navegador (recomendado **celular**, cámara trasera, HTTPS)
4. **Gestores/admin:** sección *Herramientas* con enlace **Probar proctoring (sandbox)** e informes

La configuración principal (almacenamiento, RUT, alertas live, Python embebido) está en **Plugins locales → Moodle Proctor**.

Ajustes del bloque: **Administración → Bloques → Moodle Proctor block**.

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

## Soporte

- **Autor:** [John Rivera](https://github.com/Johnrivera7) · [johnriveragonzalez7@gmail.com](mailto:johnriveragonzalez7@gmail.com)
- **Issues:** https://github.com/Johnrivera7/moodle_block_proctor/issues
