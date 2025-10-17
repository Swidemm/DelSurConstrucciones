<?php $page_title='Planificador'; require __DIR__ . '/../includes/header.php'; ?>

<section class="py-16 bg-slate-50">
  <div class="max-w-7xl mx-auto px-3">
    <h1 class="text-4xl md:text-5xl font-bold text-slate-900 mb-4">
      Planificador de espacios 2D/3D
    </h1>
    <p class="text-lg md:text-xl text-slate-600 mb-8">
      Construí tus planos y visualizalos en 3D con nuestro planificador integral.
    </p>
  </div>
</section>

<section class="py-12">
  <div class="max-w-7xl mx-auto px-3">
    <iframe
      src="/planner/planificador-lite.php"
      class="planner-embed w-full rounded-xl border border-slate-200 shadow-sm"
      style="height: 900px;"
      loading="lazy"
      allowfullscreen>
    </iframe>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
