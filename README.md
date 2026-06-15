# Moodle Proctor — Block (`block_moodle_proctor`)

Bloque de curso con estado de supervisión y enlace a enrollment de proctoring.

- **Repositorio:** https://github.com/Johnrivera7/moodle_block_proctor
- **Instalación:** `blocks/moodle_proctor/`
- **Depende de:** `local_moodle_proctor`

## Instalación

```bash
cd /path/to/moodle/blocks
git clone -b MOODLE_45 https://github.com/Johnrivera7/moodle_block_proctor.git moodle_proctor
```

## Uso

1. En el curso: **Activar edición → Añadir bloque → Moodle Proctor**
2. El bloque muestra:
   - Estado del almacenamiento
   - Estado del enrollment (completo / pendiente)
   - Aviso si se requiere extensión de navegador
3. Enlace **Completar enrollment** si está pendiente

## Licencia

GPL-3.0+
