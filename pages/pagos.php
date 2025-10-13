<?php $page_title='Pagos'; require __DIR__ . '/../includes/header.php'; ?>
<?php /* PHP-ready */ ?>


  <!-- Hero / Introducción -->
  <section class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-3">
      <h1 class="text-4xl md:text-5xl font-bold text-slate-900 mb-4">Medios de pago</h1>
      <p class="text-lg md:text-xl text-slate-600 mb-8">Te ofrecemos varias formas de pago para que elijas la que más se adapte a tus necesidades.</p>
    </div>
  </section>

  <!-- Opciones de pago -->
  <section class="py-16">
    <div class="max-w-7xl mx-auto px-3">
      <div class="grid md:grid-cols-3 gap-6">
        <div class="rounded-2xl bg-white p-6 shadow-sm">
          <h3 class="text-xl font-medium mb-2">Transferencia bancaria</h3>
          <p class="text-slate-600">Podés abonar mediante transferencia o depósito bancario. Te enviaremos los datos de nuestra cuenta (CBU, alias y número) al confirmar tu presupuesto.</p>
        </div>
        <div class="rounded-2xl bg-white p-6 shadow-sm">
          <h3 class="text-xl font-medium mb-2">Tarjeta de crédito/débito</h3>
          <p class="text-slate-600">Aceptamos Visa, MasterCard y American Express. Consultá con nosotros por planes de cuotas y promociones vigentes.</p>
        </div>
        <div class="rounded-2xl bg-white p-6 shadow-sm">
          <h3 class="text-xl font-medium mb-2">Mercado Pago / Efectivo</h3>
          <p class="text-slate-600">Si preferís pagar de manera online, generamos un enlace a través de Mercado Pago para tu comodidad. También podemos coordinar un pago en efectivo.</p>
        </div>
      </div>
      <p class="text-slate-600 mt-8">Si tenés dudas sobre nuestros medios de pago o necesitás un plan especial, contactanos y encontraremos la mejor solución.</p>
      <div class="mt-4">
        <a href="https://wa.me/5491123941812" class="inline-flex items-center rounded-xl bg-brand-700 px-5 py-3 text-white hover:bg-brand-600 focus-ring btn-anim">Consultar opciones de pago</a>
      </div>
    </div>
  </section>

  <!-- Footer reutilizado -->
  <!-- JavaScript: actualizar año --><?php require __DIR__ . '/../includes/footer.php'; ?>