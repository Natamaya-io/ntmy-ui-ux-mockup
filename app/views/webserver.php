<?php require __DIR__ . '/layouts/header.php'; ?>

<main>

  <section class="page-hero">
    <div class="container">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?= url('/') ?>">Beranda</a>
        <span>/</span>
        <span class="current">Web Server</span>
      </nav>

      <div class="page-hero-grid">
        <div class="page-hero-content">
          <span class="badge">
            <span class="badge-dot"></span>
            Layanan · Web Server
          </span>

          <h1><?= $hero['title'] ?></h1>
          <p class="page-hero-desc"><?= e($hero['desc']) ?></p>

          <div class="hero-actions">
            <a href="#paket" class="btn btn-primary">
              Lihat Paket Harga
              <?= svg_icon('arrow') ?>
            </a>
            <a href="<?= url('/') ?>#contact" class="btn btn-ghost">Konsultasi Gratis</a>
          </div>

          <div class="hero-stats">
            <?php foreach ($hero['stats'] as $stat): ?>
              <div>
                <strong><?= e($stat['value']) ?></strong>
                <span><?= e($stat['label']) ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="page-hero-visual" aria-hidden="true">
          <div class="orb orb-1"></div>
          <div class="orb orb-2"></div>

          <div class="mockup mockup-main">
            <div class="mockup-bar"><span></span><span></span><span></span></div>
            <div class="mockup-body">
              <div class="mockup-line w-70"></div>
              <div class="mockup-line w-90"></div>
              <div class="mockup-line w-40"></div>
              <div class="mockup-grid"><div></div><div></div><div></div><div></div></div>
            </div>
          </div>

          <div class="floating-card">
            <div class="fc-icon"><?= svg_icon('check') ?></div>
            <div>
              <strong>Server Online</strong>
              <span>uptime 99.98% · 24/7</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="paket" class="packages" style="margin-top:90px;">
    <div class="container">
      <div class="section-head">
        <span class="section-tag">Paket Harga</span>
        <h2>Pilih paket sesuai kebutuhan server Anda.</h2>
        <p class="subtitle">Harga transparan, tanpa biaya tersembunyi. Semua paket sudah termasuk konsultasi & support.</p>
      </div>

      <div class="packages-grid">
        <?php foreach ($packages as $p): ?>
          <div class="package <?= $p['featured'] ? 'featured' : '' ?>">
            <?php if ($p['featured']): ?>
              <span class="package-badge">Paling Populer</span>
            <?php endif; ?>

            <div class="package-head">
              <h3><?= e($p['name']) ?></h3>
              <p class="package-tagline"><?= e($p['tagline']) ?></p>
            </div>

            <div class="package-price">
              <?php if ($p['price'] === 'Custom'): ?>
                <span class="price-value">Custom</span>
              <?php else: ?>
                <span class="price-currency">Rp</span>
                <span class="price-value"><?= e($p['price']) ?></span>
              <?php endif; ?>
            </div>

            <ul class="package-features">
              <?php foreach ($p['features'] as $feat): ?>
                <li><?= svg_icon('check') ?> <?= e($feat) ?></li>
              <?php endforeach; ?>
            </ul>

            <a href="<?= url('/') ?>#contact" class="btn <?= $p['featured'] ? 'btn-primary' : 'btn-outline' ?> package-cta">
              <?= e($p['cta']) ?>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="faq-section">
    <div class="container">
      <div class="section-head">
        <span class="section-tag">FAQ</span>
        <h2>Pertanyaan yang sering ditanyakan.</h2>
        <p class="subtitle">Belum ketemu jawabannya? Hubungi kami langsung — gratis.</p>
      </div>

      <div class="faq-list">
        <?php foreach ($faqs as $faq): ?>
          <details class="faq-item">
            <summary>
              <span><?= e($faq['q']) ?></span>
              <span class="faq-icon"><?= svg_icon('plus') ?></span>
            </summary>
            <div class="faq-answer">
              <p><?= e($faq['a']) ?></p>
            </div>
          </details>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="cta">
    <div class="container">
      <div class="cta-inner">
        <span class="section-tag light">Mulai Sekarang</span>
        <h2>Siap upgrade infrastruktur server Anda?</h2>
        <p>Konsultasi gratis, tanpa komitmen. Ceritakan kebutuhan server Anda — kami bantu carikan solusi terbaiknya.</p>

        <div class="cta-actions">
          <a href="mailto:<?= SITE_EMAIL ?>" class="btn btn-light">
            <?= svg_icon('mail') ?> <?= SITE_EMAIL ?>
          </a>
          <a href="https://wa.me/<?= SITE_WA ?>" class="btn btn-ghost" target="_blank" rel="noopener">
            <?= svg_icon('phone') ?> WhatsApp
          </a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require __DIR__ . '/layouts/footer.php'; ?>