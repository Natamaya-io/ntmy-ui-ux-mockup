<?php $navServices = ServiceModel::nav(); ?>
<header class="navbar">
  <div class="container nav-inner">
    <a href="<?= url('/') ?>" class="logo">
  <img src="<?= asset('logo.png') ?>" alt="Natamaya" class="logo-img" width="40" height="40">
  <span class="logo-text">Natamaya</span>
</a>

    <nav class="nav-links" id="navLinks">
      <a href="<?= url('/') ?>">Beranda</a>

      <div class="nav-dropdown">
        <button class="nav-dropdown-toggle" type="button" aria-expanded="false">
          Layanan
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="6 9 12 15 18 9"/>
          </svg>
        </button>

        <div class="nav-dropdown-menu">
          <?php foreach ($navServices as $s): ?>
            <a href="<?= url('service/' . $s['slug']) ?>" class="dropdown-item">
              <span class="di-icon"><?= svg_icon($s['icon']) ?></span>
              <span class="di-text">
                <strong><?= e($s['title']) ?></strong>
                <em><?= e($s['short']) ?></em>
              </span>
            </a>
          <?php endforeach; ?>
        </div>
      </div>

      <a href="<?= url('webserver') ?>">Web Server</a>
      <a href="<?= url('/') ?>#process">Proses</a>
      <a href="<?= url('/') ?>#contact">Kontak</a>

      <div class="nav-mobile-actions">
        <a href="<?= url('login') ?>" class="btn btn-ghost-light">
          <?= svg_icon('user') ?>
          Login Client
        </a>
        <a href="<?= url('/') ?>#contact" class="btn btn-primary">Mulai Proyek</a>
      </div>
    </nav>

    <div class="nav-actions">
      <a href="<?= url('login') ?>" class="btn btn-ghost-light">
        <?= svg_icon('user') ?>
        Login Client
      </a>
      <a href="<?= url('/') ?>#contact" class="btn btn-outline nav-cta">Mulai Proyek</a>
    </div>

    <button class="nav-toggle" id="navToggle" aria-label="Toggle menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>