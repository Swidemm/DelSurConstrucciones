<?php
// includes/header.php
?><!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo isset($page_title) ? $page_title . " | Proyecto Arquitecto" : "Proyecto Arquitecto"; ?></title>
  <link rel="stylesheet" href="/css/styles.css">
  <link rel="icon" href="/images/favicon.ico">
</head>
<body>
  <header class="site-header">
    <div class="container">
      <a class="brand" href="/">Proyecto Arquitecto</a>
      <nav class="nav">
        <a href="/">Inicio</a>
        <a href="/pages/pagos.php">Pagos</a>
        <a href="/planner/planificador-lite.php">Planner</a>
        <a href="/pages/contacto.php">Contacto</a>
      </nav>
    </div>
  </header>
  <main class="site-main">
