<?php require __DIR__ . '/layouts/header.php'; ?>

<main>

  <!-- ===== LOGIN HERO ===== -->
  <section class="login-hero">
    <div class="container">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?= url('/') ?>">Beranda</a>
        <span>/</span>
        <span class="current">Login Client</span>
      </nav>

      <div class="login-hero-grid">

        <!-- Sisi Kiri: Copy -->
        <div class="login-hero-content">
          <span class="badge">
            <span class="badge-dot"></span>
            Client Area
          </span>

          <h1>Selamat datang kembali, <em>klien Natamaya</em>.</h1>

          <p class="page-hero-desc">
            Satu pintu untuk memantau semua project, request revisi, dan akses file deliverable Anda.
            Login untuk melanjutkan.
          </p>

          <div class="login-perks">
            <div class="login-perk">
              <span class="login-perk-icon"><?= svg_icon('check') ?></span>
              <span>Pantau progress real-time</span>
            </div>
            <div class="login-perk">
              <span class="login-perk-icon"><?= svg_icon('check') ?></span>
              <span>Request revisi tanpa email</span>
            </div>
            <div class="login-perk">
              <span class="login-perk-icon"><?= svg_icon('check') ?></span>
              <span>Semua file dalam satu tempat</span>
            </div>
          </div>
        </div>

        <!-- Sisi Kanan: Login Form -->
        <div class="login-hero-form">
          <div class="login-card">
            <div class="login-card-head">
              <h2>Masuk ke Dashboard</h2>
              <p>Gunakan email dan password yang terdaftar.</p>
            </div>

            <form action="<?= url('login/authenticate') ?>" method="post" class="login-form">
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  placeholder="nama@perusahaan.com"
                  required
                  autocomplete="email">
              </div>

              <div class="form-group">
                <div class="form-label-row">
                  <label for="password">Password</label>
                  <a href="#" class="form-forgot">Lupa password?</a>
                </div>
                <input
                  type="password"
                  id="password"
                  name="password"
                  placeholder="••••••••"
                  required
                  autocomplete="current-password">
              </div>

              <label class="form-checkbox">
                <input type="checkbox" name="remember" value="1">
                <span>Ingat saya di perangkat ini</span>
              </label>

              <button type="submit" class="btn btn-primary btn-block">
                Login ke Dashboard
                <?= svg_icon('arrow') ?>
              </button>

              <p class="form-alt">
                Belum punya akun? <a href="<?= url('/') ?>#contact">Hubungi kami</a> untuk memulai project.
              </p>
            </form>
          </div>

          <div class="login-trust">
            <span class="login-trust-icon"><?= svg_icon('shield') ?></span>
            <div>
              <strong>Koneksi aman</strong>
              <em>Dilindungi SSL & enkripsi end-to-end</em>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ===== BENEFITS ===== -->
  <section class="detail-section login-benefits-section">
    <div class="container">
      <div class="section-head">
        <span class="section-tag">Yang Anda Dapatkan</span>
        <h2>Dashboard yang dibuat untuk klien.</h2>
        <p class="subtitle">Semua yang Anda butuhkan untuk berkolaborasi dengan tim Natamaya — dalam satu tempat.</p>
      </div>

      <div class="features-grid">
        <?php foreach ($benefits as $b): ?>
          <div class="feature-item">
            <div class="feature-icon"><?= svg_icon($b['icon']) ?></div>
            <h3><?= e($b['title']) ?></h3>
            <p><?= e($b['desc']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ===== FAQ ===== -->
  <section class="faq-section">
    <div class="container">
      <div class="section-head">
        <span class="section-tag">FAQ</span>
        <h2>Pertanyaan seputar akun client.</h2>
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

</main>

<?php require __DIR__ . '/layouts/footer.php'; ?>