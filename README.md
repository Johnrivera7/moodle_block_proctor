# Moodle Proctor — Block

[![Moodle](https://img.shields.io/badge/Moodle-5.3-orange?style=flat-square&logo=moodle)](https://moodle.org)
[![PHP](https://img.shields.io/badge/PHP-8.3%2B-777BB4?style=flat-square&logo=php&logoColor=white)](https://www.php.net)
[![License](https://img.shields.io/badge/License-GPL--3.0-blue?style=flat-square)](LICENSE)
[![Branch](https://img.shields.io/badge/Branch-MOODLE__53-green?style=flat-square)](https://github.com/Johnrivera7/moodle_block_proctor/tree/MOODLE_53)
[![Depends on](https://img.shields.io/badge/Requires-local__moodle__proctor-red?style=flat-square)](https://github.com/Johnrivera7/moodle_proctor)
[![Version](https://img.shields.io/badge/Version-1.7.0-informational?style=flat-square)](version.php)

Bloque de curso que explica al estudiante, en lenguaje simple, si debe **verificar su identidad** (con los 5 pasos que encontrará), si su verificación está **vigente o vencida** y si tiene instalada la **extensión del navegador**. Para docentes: informes, informe de identidad facial e **infracciones de integridad**.

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
| Plugin núcleo | [`local_moodle_proctor`](https://github.com/Johnrivera7/moodle_proctor/tree/MOODLE_53) **v1.7.0** |

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
2. **Estudiante sin verificar (o con la verificación vencida):** ve los 5 pasos (frente de la cédula, sus datos, su rostro, dorso con QR, revisar y guardar), consejos y el botón **Verificar mi identidad**.
3. **Estudiante verificado:** «Su identidad está verificada», con la fecha de vigencia si el núcleo la tiene configurada.
4. **Extensión** (si está habilitada en el núcleo): «Extensión del navegador instalada» o «Falta la extensión del navegador» con el botón **Instalar extensión**, que abre la Chrome Web Store cuando la URL está configurada.
5. **Herramientas para docentes** (`viewreports`): estado del almacenamiento, **Informes de supervisión**, **Informe de identidad facial** e **Infracciones de integridad**. Gestores y administradores ven además el sandbox.

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
