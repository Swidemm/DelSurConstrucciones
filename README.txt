Estructura generada para sitio Arquitecto (estático-friendly)

/
├── index.php                (CSS/JS inline extraídos hacia css/ y js/)
├── css/
│   └── styles.css           (bundle con estilos extraídos)
├── js/
│   └── scripts.js           (bundle con scripts extraídos)
├── database/                (vacío, reservado)
├── images/                  (vacío, poné tus imágenes)
├── videos/                  (vacío)
├── planner/
│   ├── planificador.php     (copiado sin cambios)
│   └── planificador-lite.php (copiado sin cambios)
└── pages/
    ├── pagos.php            (CSS/JS inline extraídos si existían)
    └── gracias.php          (CSS/JS inline extraídos si existían)

Notas:
- Agregué <link rel="stylesheet" href="css/styles.css"> automáticamente si no estaba.
- Si había <script> inline sin src, lo moví a js/scripts.js y agregué la referencia antes de </body>.
- No toqué los archivos del planner para no romper nada.


ADICIONES:
- /includes/header.php y /includes/footer.php (plantilla común con nav + footer)
- /pages/contacto.php y /pages/contacto-enviar.php (formulario de contacto por PHP -> edita el correo en contacto-enviar.php)
- /.htaccess con HTTPS + cache + headers básicos

Para usar header/footer en tus páginas existentes:
- En `index.php`, al inicio: `<?php $page_title="Inicio"; require __DIR__ . '/includes/header.php'; ?>`
- Al final: `<?php require __DIR__ . '/includes/footer.php'; ?>`

En las páginas dentro de /pages/:
- Inicio: `<?php $page_title="Título"; require __DIR__ . '/../includes/header.php'; ?>`
- Final: `<?php require __DIR__ . '/../includes/footer.php'; ?>`
