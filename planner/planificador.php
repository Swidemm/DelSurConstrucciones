<?php $page_title='Planner'; require __DIR__ . '/../includes/header.php'; ?>
<?php /* PHP-ready */ ?>


  <!-- Hero -->
  <section class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-3">
      <h1 class="text-4xl md:text-5xl font-bold text-slate-900 mb-4">Planificador de espacios 2D/3D</h1>
      <p class="text-lg md:text-xl text-slate-600 mb-8">Construí tus planos y visualizalos en 3D con nuestro planificador integral.</p>
    </div>
  </section>

  <!-- Iframe embedding the planificador lite tool -->
  <section class="py-16">
    <div class="max-w-7xl mx-auto px-3">
      <iframe src="/planner/planificador-lite.php" class="planner-embed" loading="lazy" allowfullscreen></iframe>
    </div>
  </section>

  <!-- Footer -->
  <!-- JavaScript to update year in footer -->
  <script>
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>
<?php require __DIR__ . '/../includes/footer.php'; ?>