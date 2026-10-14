# Moodle Proctor — Block

[![Moodle](https://img.shields.io/badge/Moodle-5.3-orange?style=flat-square&logo=moodle)](https://moodle.org)
[![PHP](https://img.shields.io/badge/PHP-8.3%2B-777BB4?style=flat-square&logo=php&logoColor=white)](https://www.php.net)
[![License](https://img.shields.io/badge/License-GPL--3.0-blue?style=flat-square)](LICENSE)
[![Branch](https://img.shields.io/badge/Branch-MOODLE__53-green?style=flat-square)](https://github.com/Johnrivera7/moodle_block_proctor/tree/MOODLE_53)
[![Depends on](https://img.shields.io/badge/Requires-local__moodle__proctor-red?style=flat-square)](https://github.com/Johnrivera7/moodle_proctor)
[![Version](https://img.shields.io/badge/Version-1.6.4-informational?style=flat-square)](version.php)

Bloque de curso con **estado de supervisión**, enlace a **verificación de identidad** (cédula + rostro), **informe de identidad facial** para docentes y **sandbox** para gestores y administradores.

| | |
|---|---|
| **Autor** | [John Rivera](https://github.com/Johnrivera7) |
| **Contacto** | [johnriveragonzalez7@gmail.com](mailto:johnriveragonzalez7@gmail.com) |
| **Componente** | `block_moodle_proctor` |
| **Instalación** | `blocks/moodle_proctor/` |
| **Repositorio** | https://github.com/Johnrivera7/moodle_block_proctor |
| **Rama** | **`MOODLE_53`** — Moodle 5.3 / PHP 8.3+ |

> Moodle 5.2: rama [`MOODLE_52`](https://github.com/Johnrivera7/moodle_block_proctor/tree/MOODLE_52). Moodle 4.5: rama [`MOODLE_45`](https://github.com/Johnrivera7/moodle_block_proctor/tree/MOODLE_45).

---

## Requisitos

| Requisito | Versión |
|-----------|---------|
| Moodle | **5.3** |
| PHP | **8.3+** |
| Plugin núcleo | [`local_moodle_proctor`](https://github.com/Johnrivera7/moodle_proctor/tree/MOODLE_53) **v1.6.4** |

---

## Instalación

```bash
cd /path/to/moodle/blocks
git clone -b MOODLE_53 https://github.com/Johnrivera7/moodle_block_proctor.git moodle_proctor
```

En Moodle 5.3 con carpeta `public/`, el destino es `public/blocks/moodle_proctor/`.

**Administración → Notificaciones** (después de instalar `local_moodle_proctor`).

---

## Uso

1. **Añadir bloque → Moodle Proctor** en el curso.
2. El semáforo muestra almacenamiento y verificación de identidad.
3. El botón **Verificar identidad (cédula + rostro)** abre el flujo en el navegador. En el celular, con HTTPS y la cámara trasera, la lectura de la cédula es más fiable.
4. Docentes y gestores (`viewreports`) ven **Informes de supervisión** e **Informe de identidad facial**.
5. Gestores y administradores ven el enlace al sandbox.

La configuración principal está en **Plugins locales → Moodle Proctor**. El cuestionario funciona aunque este bloque no esté en el curso: la regla de acceso también exige la identidad.

Ajustes del bloque: **Administración → Bloques → Moodle Proctor block**.

---

## Suite MOODLE_53

| Repo | Rol |
|------|-----|
| [moodle_proctor](https://github.com/Johnrivera7/moodle_proctor/tree/MOODLE_53) | Núcleo |
| [moodle_quizaccess_proctor](https://github.com/Johnrivera7/moodle_quizaccess_proctor/tree/MOODLE_53) | Quiz |
| **moodle_block_proctor** | ← Bloque |
| [moodle_proctor_python](https://github.com/Johnrivera7/moodle_proctor_python/tree/MOODLE_53) | Python legacy |
| [moodle_proctor_extension](https://github.com/Johnrivera7/moodle_proctor_extension/tree/MOODLE_53) | Extensión |

---

## Licencia

GPL-3.0+ — [LICENSE](LICENSE)

## Soporte

- **Autor:** [John Rivera](https://github.com/Johnrivera7) · [johnriveragonzalez7@gmail.com](mailto:johnriveragonzalez7@gmail.com)
- **Issues:** https://github.com/Johnrivera7/moodle_block_proctor/issues
