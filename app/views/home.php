<?php require __DIR__ . '/layouts/header.php'; ?>

<main>

  <section id="home" class="hero">
    <div class="container hero-inner">
      <div class="hero-content">
        <span class="badge">
          <span class="badge-dot"></span>
          Digital Agency · Indonesia
        </span>

        <h1>Bangun <em>produk digital</em> yang tumbuh bersama bisnis Anda.</h1>

        <p class="hero-desc">
          Natamaya membantu perusahaan membangun website & aplikasi yang cepat, rapi,
          dan siap dikembangkan — dari company profile hingga sistem custom berskala enterprise.
        </p>

        <div class="hero-actions">
          <a href="#contact" class="btn btn-primary">
            Mulai Konsultasi
            <?= svg_icon('arrow') ?>
          </a>
          <a href="#services" class="btn btn-ghost">Lihat Layanan</a>
        </div>

        <div class="hero-stats">
          <div><strong>Fixed Price</strong><span>Harga terjangkau</span></div>
          <div><strong>Free Konsultasi</strong><span>Tidak Perlu Sungkan</span></div>
          <div><strong>Fast</strong><span>Respon & Pengerjaan</span></div>
        </div>
      </div>

      <div class="hero-visual" aria-hidden="true">
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
            <strong>Deploy Berhasil</strong>
            <span>build passed · 2.4s</span>
          </div>
        </div>
      </div>
    </div>

    <div class="hero-marquee">
      <div class="marquee-track">
        <span>Website Development</span><span>•</span>
        <span>UI/UX Design</span><span>•</span>
        <span>E-Commerce</span><span>•</span>
        <span>Custom Application</span><span>•</span>
        <span>Landing Page</span><span>•</span>
        <span>API Integration</span><span>•</span>
        <span>Website Development</span><span>•</span>
        <span>UI/UX Design</span><span>•</span>
        <span>E-Commerce</span><span>•</span>
        <span>Custom Application</span><span>•</span>
        <span>Landing Page</span><span>•</span>
        <span>API Integration</span><span>•</span>
      </div>
    </div>
  </section>

  <section id="services" class="services">
    <div class="container">
      <div class="section-head">
        <span class="section-tag">Layanan Kami</span>
        <h2>Solusi digital, dirancang sesuai kebutuhan.</h2>
        <p class="subtitle">Empat layanan utama yang kami kerjakan dengan standar profesional dan hasil yang terukur.</p>
      </div>

      <div class="grid">
        <?php foreach ($services as $slug => $s): ?>
          <article class="product">
            <?php if (!empty($s['tag'])): ?>
              <span class="product-tag"><?= e($s['tag']) ?></span>
            <?php endif; ?>

            <div class="icon"><?= svg_icon($s['icon']) ?></div>
            <h3><?= e($s['title']) ?></h3>
            <p><?= e($s['short']) ?></p>

            <ul>
              <?php foreach (array_slice($s['features'], 0, 4) as $f): ?>
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

  <section id="process" class="process">
    <div class="container">
      <div class="section-head">
        <span class="section-tag">Cara Kerja</span>
        <h2>Proses yang jelas, hasil yang terukur.</h2>
        <p class="subtitle">Empat langkah sederhana dari ide hingga produk siap pakai.</p>
      </div>

      <div class="process-grid">
        <?php foreach ($process as $item): ?>
          <div class="process-item">
            <span class="process-step"><?= e($item['step']) ?></span>
            <h3><?= e($item['title']) ?></h3>
            <p><?= e($item['desc']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section id="testimonials" class="testimonials">
    <div class="container">
      <div class="section-head">
        <span class="section-tag">Testimoni</span>
        <h2>Dipercaya oleh bisnis dari berbagai industri.</h2>
        <p class="subtitle">Apa kata klien yang telah bekerja sama dengan Natamaya.</p>
      </div>

      <div class="testi-grid">
        <?php foreach ($testimonials as $t): ?>
          <figure class="testi">
            <div class="testi-stars"><?= str_repeat(svg_icon('star'), 5) ?></div>
            <blockquote>"<?= e($t['text']) ?>"</blockquote>
            <figcaption>
              <div class="testi-avatar"><?= e($t['init']) ?></div>
              <div>
                <strong><?= e($t['name']) ?></strong>
                <span><?= e($t['role']) ?></span>
              </div>
            </figcaption>
          </figure>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section id="contact" class="cta">
    <div class="container">
      <div class="cta-inner">
        <span class="section-tag light">Hubungi Kami</span>
        <h2>Siap membangun produk digital Anda bersama Natamaya?</h2>
        <p>Konsultasi gratis, tanpa komitmen. Ceritakan kebutuhan bisnis Anda — kami bantu carikan solusinya.</p>

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