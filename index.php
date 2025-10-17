<?php $page_title='Inicio'; require __DIR__ . '/includes/header.php'; ?>
<?php /* PHP-ready */ ?>
<section id="inicio" class="relative isolate">
    <video autoplay muted loop playsinline class="absolute inset-0 -z-10 h-full w-full object-cover">
      <source src="/videos/hero.mp4" type="video/mp4" />
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
  </section>

  <!-- Proceso -->
  <section id="proceso" class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-3">
      <h2 class="text-3xl font-semibold mb-8">Nuestro proceso</h2>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="rounded-2xl bg-white p-6 shadow-sm">
          <h3 class="text-xl font-medium mb-2">1. Visita y presupuesto</h3>
          <p class="text-slate-600">Evaluamos el espacio y las necesidades. Te entregamos un presupuesto detallado sin cargo.</p>
        </div>
        <div class="rounded-2xl bg-white p-6 shadow-sm">
          <h3 class="text-xl font-medium mb-2">2. Diseño y gestión</h3>
          <p class="text-slate-600">Nuestros profesionales elaboran el proyecto y gestionan los permisos necesarios.</p>
        </div>
        <div class="rounded-2xl bg-white p-6 shadow-sm">
          <h3 class="text-xl font-medium mb-2">3. Obra y entrega</h3>
          <p class="text-slate-600">Nos ocupamos de la ejecución y supervisión hasta la entrega final en tiempo y forma.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Preguntas frecuentes -->
  <section id="faq" class="py-16">
    <div class="max-w-7xl mx-auto px-3">
      <h2 class="text-3xl font-semibold mb-6">Preguntas frecuentes</h2>
      <div id="faq-list" class="space-y-4">
        <details class="rounded-xl bg-slate-50 p-4">
          <summary class="cursor-pointer text-lg font-medium flex items-center justify-between">¿Cuánto demora un proyecto? <span>＋</span></summary>
          <div class="faq-answer text-slate-600 mt-2">El tiempo depende del tipo de obra. Una vivienda llave en mano puede demorar entre 6 y 12 meses, mientras que refacciones parciales toman menos tiempo.</div>
        </details>
        <details class="rounded-xl bg-slate-50 p-4">
          <summary class="cursor-pointer text-lg font-medium flex items-center justify-between">¿Trabajan en todo el país? <span>＋</span></summary>
          <div class="faq-answer text-slate-600 mt-2">Nos especializamos en proyectos dentro del AMBA. Para obras fuera de la región, evaluamos cada caso en particular.</div>
        </details>
        <details class="rounded-xl bg-slate-50 p-4">
          <summary class="cursor-pointer text-lg font-medium flex items-center justify-between">¿Ofrecen garantía de sus trabajos? <span>＋</span></summary>
          <div class="faq-answer text-slate-600 mt-2">Sí. Todas nuestras obras cuentan con garantía por escrito y servicio de posventa para asegurar tu tranquilidad.</div>
        </details>
      </div>
    </div>
  </section>

  <!-- Contacto -->
  <section id="contacto" class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-3">
      <h2 class="text-3xl font-semibold mb-6">Contacto</h2>
      <div class="grid md:grid-cols-2 gap-8">
        <div>
          <h3 class="text-xl font-medium mb-2">Visítanos o contáctanos</h3>
          <p class="text-slate-600">Estamos en Buenos Aires (AMBA). Atendemos lunes a viernes de 9 a 18 h.</p>
          <p class="mt-2"><strong>Teléfono:</strong> +54 9 11 2394-1812</p>
          <p><strong>Email:</strong> lauti.seid@gmail.com</p>
          <p><strong>Dirección:</strong> Calle Falsa 123, Buenos Aires</p>
          <div class="mt-4">
            <a href="https://wa.me/5491123941812" class="inline-flex items-center rounded-xl bg-brand-600 px-5 py-3 text-white hover:bg-brand-500 focus-ring btn-anim">Hablar por WhatsApp</a>
          </div>
        </div>
        <form id="contactForm" class="space-y-4">
          <div>
            <label class="block text-sm font-medium text-slate-700" for="nombre">Nombre y apellido</label>
            <input type="text" id="nombre" name="nombre" required class="mt-1 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-brand-500" />
          </div>
          <div>
            <label class="block text-sm font-medium text-slate-700" for="email">Email</label>
            <input type="email" id="email" name="email" required class="mt-1 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-brand-500" />
          </div>
          <div>
            <label class="block text-sm font-medium text-slate-700" for="telefono">Teléfono</label>
            <input type="tel" id="telefono" name="telefono" required class="mt-1 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-brand-500" />
          </div>
          <div>
            <label class="block text-sm font-medium text-slate-700" for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="mensaje" rows="4" required class="mt-1 w-full rounded-lg border border-slate-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-brand-500"></textarea>
          </div>
          <button type="submit" class="rounded-xl bg-brand-700 px-5 py-3 text-white hover:bg-brand-600 focus-ring btn-anim">Enviar</button>
          <p id="formMessage" class="text-sm mt-2"></p>
        </form>
      </div>
      <!-- Google Map embed (placeholder coordinates, replace with actual) -->
      <div class="mt-12">
        <iframe class="w-full h-64 border-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13126.492675264348!2d-58.381592!3d-34.603684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb2d72152cdb%3A0x0!2sBuenos+Aires!5e0!3m2!1ses-419!2sar!4v1670000000000!5m2!1ses-419!2sar" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <!-- JavaScript --><?php require __DIR__ . '/includes/footer.php'; ?>