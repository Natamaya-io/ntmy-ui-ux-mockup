<?php require __DIR__ . '/layouts/header.php'; ?>

<main>
  <section class="page-hero" style="min-height:70vh; display:flex; align-items:center;">
    <div class="container" style="text-align:center;">
      <span class="badge">
        <span class="badge-dot"></span>
        Error 404
      </span>
      <h1 style="margin-top:24px;">Halaman <em>tidak ditemukan</em>.</h1>
      <p class="page-hero-desc" style="margin:0 auto 32px;">
        Mungkin URL-nya salah, atau halaman sudah dipindahkan. Yuk kembali ke beranda.
      </p>
      <a href="<?= url('/') ?>" class="btn btn-primary">
        Kembali ke Beranda
        <?= svg_icon('arrow') ?>
      </a>
    </div>
  </section>
</main>

<?php require __DIR__ . '/layouts/footer.php'; ?>