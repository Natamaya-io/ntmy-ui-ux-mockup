<?php require __DIR__ . '/layouts/header.php'; ?>

<main>

  <section class="page-hero">
    <div class="container">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?= url('/') ?>">Beranda</a>
        <span>/</span>
        <a href="<?= url('/') ?>#services">Layanan</a>
        <span>/</span>
        <span class="current"><?= e($service['title']) ?></span>
      </nav>

      <div class="page-hero-grid">
        <div class="page-hero-content">
          <span class="badge">
            <span class="badge-dot"></span>
            Layanan · <?= e($service['title']) ?>
          </span>

          <h1><?= $service['hero']['title'] ?></h1>
          <p class="page-hero-desc"><?= e($service['hero']['desc']) ?></p>

          <div class="hero-actions">
            <a href="#paket" class="btn btn-primary">
              Lihat Paket Harga
              <?= svg_icon('arrow') ?>
            </a>
            <a href="<?= url('/') ?>#contact" class="btn btn-ghost">Konsultasi Gratis</a>
          </div>

          <div class="hero-stats">
            <?php foreach ($service['hero']['stats'] as $stat): ?>
              <div>
                <strong><?= e($stat['value']) ?></strong>
                <span><?= e($stat['label']) ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <?php $heroImg = service_hero_image($service['slug'], $service['hero']['image'] ?? ''); ?>
        <div class="page-hero-visual">
          <div class="orb orb-1"></div>
          <div class="orb orb-2"></div>

          <?php if ($heroImg): ?>
            <div class="hero-photo">
              <img src="<?= e($heroImg) ?>" alt="<?= e($service['title']) ?>">
            </div>
          <?php else: ?>
            <div class="mockup mockup-main" aria-hidden="true">
              <div class="mockup-bar"><span></span><span></span><span></span></div>
              <div class="mockup-body">
                <div class="mockup-line w-70"></div>
                <div class="mockup-line w-90"></div>
                <div class="mockup-line w-40"></div>
                <div class="mockup-grid"><div></div><div></div><div></div><div></div></div>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== FEATURES — ZIGZAG ===== -->
  <section class="detail-section features-zigzag-section">
    <div class="container">
      <div class="section-head">
        <span class="section-tag">Yang Anda Dapatkan</span>
        <h2>Fitur lengkap, hasil profesional.</h2>
        <p class="subtitle">Setiap proyek Natamaya dibangun dengan standar yang sama — tidak ada yang asal jadi.</p>
      </div>

      <div class="feature-zigzag">
        <?php foreach ($service['features'] as $i => $f): ?>
          <?php
            $imgUrl = service_image($service['slug'], $f['image'] ?? '');
            $isReverse = ($i % 2) === 1;
          ?>
          <div class="zigzag-item <?= $isReverse ? 'reverse' : '' ?>">

            <div class="zigzag-visual">
              <?php if ($imgUrl): ?>
                <div class="zigzag-image">
                  <img src="<?= e($imgUrl) ?>" alt="<?= e($f['title']) ?>" loading="lazy">
                </div>
              <?php else: ?>
                <div class="zigzag-fallback">
                  <div class="zigzag-fallback-icon">
                    <?= svg_icon($f['icon']) ?>
                  </div>
                </div>
              <?php endif; ?>
            </div>

            <div class="zigzag-content">
              <span class="zigzag-number"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
              <h3><?= e($f['title']) ?></h3>
              <p><?= e($f['desc']) ?></p>
            </div>

          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section id="paket" class="packages">
    <div class="container">
      <div class="section-head">
        <span class="section-tag">Paket Harga</span>
        <h2>Pilih paket sesuai skala bisnis Anda.</h2>
        <p class="subtitle">Harga transparan, tanpa biaya tersembunyi. Semua paket sudah termasuk konsultasi & support.</p>
      </div>

      <div class="packages-grid">
        <?php foreach ($service['packages'] as $p): ?>
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

  <section class="deliverables">
    <div class="container">
      <div class="deliverables-inner">
        <div class="deliverables-content">
          <span class="section-tag">Yang Anda Terima</span>
          <h2 style="text-align:left; margin:16px 0 20px;">Bukan cuma website — tapi aset bisnis jangka panjang.</h2>
          <ul class="deliverables-list">
            <?php foreach ($service['deliverables'] as $d): ?>
              <li>
                <span class="check-circle"><?= svg_icon('check') ?></span>
                <?= e($d) ?>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <div class="deliverables-visual" aria-hidden="true">
          <div class="progress-card">
            <div class="pc-row"><span class="pc-label">Design</span><span class="pc-bar"><span style="width:100%"></span></span></div>
            <div class="pc-row"><span class="pc-label">Develop</span><span class="pc-bar"><span style="width:100%"></span></span></div>
            <div class="pc-row"><span class="pc-label">SEO</span><span class="pc-bar"><span style="width:100%"></span></span></div>
            <div class="pc-row"><span class="pc-label">Launch</span><span class="pc-bar"><span style="width:100%"></span></span></div>
            <div class="pc-status">
              <span class="pc-dot"></span>
              All systems ready
            </div>
          </div>
        </div>
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
        <?php foreach ($service['faqs'] as $faq): ?>
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

  <section class="detail-section" style="padding-top:0;">
    <div class="container">
      <div class="section-head">
        <span class="section-tag">Layanan Lain</span>
        <h2>Butuh yang lain?</h2>
        <p class="subtitle">Natamaya juga mengerjakan layanan berikut.</p>
      </div>

      <div class="grid">
        <?php foreach ($all as $slug => $s): ?>
          <?php if ($slug === $service['slug']) continue; ?>
          <article class="product">
            <div class="icon"><?= svg_icon($s['icon']) ?></div>
            <h3><?= e($s['title']) ?></h3>
            <p><?= e($s['short']) ?></p>
            <ul>
              <?php foreach (array_slice($s['features'], 0, 3) as $f): ?>
                <li><?= e($f['title']) ?></li>
              <?php endforeach; ?>
            </ul>
            <a href="<?= url('service/' . $slug) ?>" class="btn btn-card">
              Lihat Detail
              <?= svg_icon('arrow') ?>
            </a>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="cta">
    <div class="container">
      <div class="cta-inner">
        <span class="section-tag light">Mulai Sekarang</span>
        <h2>Siap memulai proyek <?= e($service['title']) ?> Anda?</h2>
        <p>Konsultasi gratis, tanpa komitmen. Ceritakan kebutuhan bisnis Anda — kami bantu carikan solusi terbaiknya.</p>

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