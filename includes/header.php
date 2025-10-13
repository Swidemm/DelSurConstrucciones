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
  <!-- Barra superior -->
  <div class="bg-brand-900 text-white text-sm">
    <div class="max-w-7xl mx-auto px-3 py-2 flex items-center justify-between">
      <p>Atendemos AMBA · Lun–Vie 9–18 h</p>
      <a href="https://wa.me/5491123941812" class="underline hover:no-underline">WhatsApp: +54 9 11 2394-1812</a>
    </div>
  </div>

  <!-- Header sticky -->
  <header class="sticky top-0 z-40 bg-white/90 backdrop-blur border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-3 py-3 flex items-center gap-4">
      <a href="#inicio" class="flex items-center gap-3 mr-auto">
        <img src="/images/logo.webp" alt="Del Sur Construcciones" class="h-14 w-auto logo-slide" />
        <span class="sr-only">Del Sur Construcciones</span>
      </a>
      <nav class="hidden md:flex gap-6 text-slate-700 nav-drop">
        <a class="hover:text-brand-700 focus-ring" href="#servicios">Servicios</a>
        <a class="hover:text-brand-700 focus-ring" href="#proyectos">Proyectos</a>
        <a class="hover:text-brand-700 focus-ring" href="#proceso">Proceso</a>
        <a class="hover:text-brand-700 focus-ring" href="#faq">Preguntas</a>
        <!-- Enlaces a secciones adicionales -->
        <a class="hover:text-brand-700 focus-ring" href="/planner/planificador.php">Planificador</a>
        <a class="hover:text-brand-700 focus-ring" href="/pages/pagos.php">Pagos</a>
        <a class="hover:text-brand-700 focus-ring" href="#contacto">Contacto</a>
      </nav>
      <a href="#contacto" class="ml-4 inline-flex items-center rounded-xl bg-brand-700 px-4 py-2 text-white hover:bg-brand-600 focus-ring btn-anim nav-drop">Solicitar presupuesto</a>
    </div>
  </header>

  <!-- Hero -->
  <section id="inicio" class="relative isolate">
    <video autoplay muted loop playsinline class="absolute inset-0 -z-10 h-full w-full object-cover">
      <source src="./videos/hero.mp4" type="video/mp4" />
    </video>
    <!-- Blueprint overlay with subtle architectural lines -->
    <div class="absolute inset-0 arch-overlay"></div>
    <!-- Dark overlay for contrast -->
    <div class="absolute inset-0 -z-10 bg-slate-900/60"></div>
    <div class="max-w-7xl mx-auto px-3 py-24 md:py-36 text-white">
      <h1 class="text-4xl md:text-6xl font-bold leading-tight">Obras llave en mano, refacciones y diseño</h1>
      <p class="mt-4 max-w-2xl text-lg md:text-xl text-slate-100">Viviendas, locales y espacios comerciales. Dirección técnica, ejecución y entrega en tiempo y forma.</p>
      <div class="mt-8 flex gap-3">
        <a href="#proyectos" class="rounded-xl bg-white/10 px-5 py-3 hover:bg-white/20 focus-ring btn-anim">Ver proyectos</a>
        <a href="https://wa.me/5491123941812" class="rounded-xl bg-brand-500 px-5 py-3 hover:bg-brand-400 focus-ring btn-anim">Hablar por WhatsApp</a>
      </div>
    </div>
  </section>

  <!-- Servicios -->
  <section id="servicios" class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-3">
      <h2 class="text-3xl font-semibold">Servicios</h2>
      <p class="text-slate-600 mt-2">Acompañamos todo el ciclo: anteproyecto, obra y posventa.</p>
      <div class="mt-8 grid md:grid-cols-3 gap-6">
        <div class="rounded-2xl bg-white p-6 shadow-sm">
          <h3 class="text-xl font-medium mb-2">Viviendas</h3>
          <ul class="list-disc list-inside text-slate-600 space-y-1">
            <li>Llave en mano</li>
            <li>Ampliaciones y refacciones</li>
            <li>Diseño interior</li>
          </ul>
        </div>
        <div class="rounded-2xl bg-white p-6 shadow-sm">
          <h3 class="text-xl font-medium mb-2">Locales y oficinas</h3>
          <ul class="list-disc list-inside text-slate-600 space-y-1">
            <li>Adecuación comercial</li>
            <li>Instalaciones técnicas</li>
            <li>Entrega rápida</li>
          </ul>
        </div>
        <div class="rounded-2xl bg-white p-6 shadow-sm">
          <h3 class="text-xl font-medium mb-2">Mantenimiento</h3>
          <ul class="list-disc list-inside text-slate-600 space-y-1">
            <li>Plan preventivo</li>
            <li>Correcciones y urgencias</li>
            <li>Garantía y posventa</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Proyectos -->
  <section id="proyectos" class="py-16">
    <div class="max-w-7xl mx-auto px-3">
      <h2 class="text-3xl font-semibold">Proyectos recientes</h2>
      <p class="text-slate-600 mt-2">Algunas obras que reflejan la calidad y compromiso de nuestro equipo.</p>
      <div class="mt-8 grid md:grid-cols-3 gap-6">
        <div class="rounded-2xl overflow-hidden shadow-sm bg-white">
          <img src="/images/proyectos/proyecto-1.webp" alt="Proyecto 1" class="w-full h-48 object-cover" />
          <div class="p-4">
            <h3 class="text-lg font-medium">Vivienda familiar</h3>
            <p class="text-slate-600 text-sm mt-1">Proyecto llave en mano de 200 m² con diseño contemporáneo.</p>
          </div>
        </div>
        <div class="rounded-2xl overflow-hidden shadow-sm bg-white">
          <img src="/images/proyectos/proyecto-2.webp" alt="Proyecto 2" class="w-full h-48 object-cover" />
          <div class="p-4">
            <h3 class="text-lg font-medium">Oficinas corporativas</h3>
            <p class="text-slate-600 text-sm mt-1">Adecuación comercial con instalaciones de alta tecnología.</p>
          </div>
        </div>
        <div class="rounded-2xl overflow-hidden shadow-sm bg-white">
          <img src="/images/proyectos/proyecto-3.webp" alt="Proyecto 3" class="w-full h-48 object-cover" />
          <div class="p-4">
            <h3 class="text-lg font-medium">Refacción integral</h3>
            <p class="text-slate-600 text-sm mt-1">Ampliación y modernización de vivienda en el barrio norte.</p>
          </div>
        </div>
      </div>
    </div>
<!-- Header sticky -->
  <header class="sticky top-0 z-40 bg-white/90 backdrop-blur border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-3 py-3 flex items-center gap-4">
      <a href="#inicio" class="flex items-center gap-3 mr-auto">
        <img src="/images/logo.webp" alt="Del Sur Construcciones" class="h-14 w-auto logo-slide" />
        <span class="sr-only">Del Sur Construcciones</span>
      </a>
      <nav class="hidden md:flex gap-6 text-slate-700 nav-drop">
        <a class="hover:text-brand-700 focus-ring" href="#servicios">Servicios</a>
        <a class="hover:text-brand-700 focus-ring" href="#proyectos">Proyectos</a>
        <a class="hover:text-brand-700 focus-ring" href="#proceso">Proceso</a>
        <a class="hover:text-brand-700 focus-ring" href="#faq">Preguntas</a>
        <!-- Enlaces a secciones adicionales -->
        <a class="hover:text-brand-700 focus-ring" href="/planner/planificador.php">Planificador</a>
        <a class="hover:text-brand-700 focus-ring" href="/pages/pagos.php">Pagos</a>
        <a class="hover:text-brand-700 focus-ring" href="#contacto">Contacto</a>
      </nav>
      <a href="#contacto" class="ml-4 inline-flex items-center rounded-xl bg-brand-700 px-4 py-2 text-white hover:bg-brand-600 focus-ring btn-anim nav-drop">Solicitar presupuesto</a>
    </div>
  </header>
<main class="site-main">
