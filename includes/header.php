<?php
// includes/header.php
?><!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo isset($page_title) ? $page_title . " | Proyecto Arquitecto" : "Proyecto Arquitecto"; ?></title><link rel="icon" href="/images/favicon.ico">
  <link rel="manifest" href="/site.webmanifest">

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: { 500:'#e24d5c', 600:'#cf4050', 700:'#b83645', 900:'#7a1f29' }
          }
        }
      }
    }
  </script>

  <link rel="stylesheet" href="/css/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="manifest" href="/site.webmanifest" />
</head>
<body>
  <header class="site-header">
  <?php
    // Helper para marcar la navegación activa
    $uri = strtok($_SERVER['REQUEST_URI'] ?? '/', '?');
    function nav_active($paths) {
      global $uri;
      if (!is_array($paths)) { $paths = [$paths]; }
      foreach ($paths as $p) {
        if (substr($uri, -1) !== '/') $uri_cmp = $uri;
        else $uri_cmp = rtrim($uri, '/');
        if ($p === $uri_cmp) return ' class="active"';
      }
      return '';
    }
  ?>

    <div class="container">
      <a class="brand" href="/">Proyecto Arquitecto</a>
      <nav class="nav">
        <a href="/"<?php echo nav_active(["","/"]); ?>>Inicio</a>
        <a href="/pages/pagos.php"<?php echo nav_active("/pages/pagos.php"); ?>>Pagos</a>
        <a href="/planner/planificador-lite.php"<?php echo nav_active(["/planner/planificador-lite.php","/planner/planificador.php"]); ?>>Planner</a>
        <a href="/pages/contacto.php"<?php echo nav_active("/pages/contacto.php"); ?>>Contacto</a>
      </nav>
    </div>
  </header>
  <main class="site-main">
