<?php $navServices = ServiceModel::nav(); ?>
<footer class="footer">
  <div class="container footer-inner">
    <div class="footer-brand">
      <a href="<?= url('/') ?>" class="logo">
  <img src="<?= asset('logo.png') ?>" alt="Natamaya" class="logo-img logo-img-white" width="40" height="40">
  <span class="logo-text">Natamaya</span>
</a>
      <p>Digital agency yang membantu bisnis tumbuh melalui produk digital berkualitas.</p>
    </div>

    <div class="footer-col">
      <h4>Layanan</h4>
      <ul>
        <?php foreach ($navServices as $s): ?>
          <li><a href="<?= url('service/' . $s['slug']) ?>"><?= e($s['title']) ?></a></li>
        <?php endforeach; ?>
        <li><a href="<?= url('webserver') ?>">Web Server</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>Kontak</h4>
      <ul>
        <li><?= svg_icon('mail') ?>  <?= SITE_EMAIL ?></li>
        <li><?= svg_icon('phone') ?> <?= SITE_PHONE ?></li>
        <li><?= svg_icon('map') ?>   <?= SITE_ADDRESS ?></li>
      </ul>
    </div>
  </div>

  <div class="container footer-bottom">
    <p>&copy; <?= date('Y') ?> <?= SITE_NAME ?>. All rights reserved.</p>
    <p>Crafted with care in Indonesia.</p>
  </div>
</footer>

<script>
  const toggle = document.getElementById('navToggle');
  const links  = document.getElementById('navLinks');
  toggle?.addEventListener('click', () => {
    const open = links.classList.toggle('open');
    toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
  });

  const dropdown = document.querySelector('.nav-dropdown');
  const ddToggle = document.querySelector('.nav-dropdown-toggle');

  ddToggle?.addEventListener('click', (e) => {
    e.stopPropagation();
    const open = dropdown.classList.toggle('open');
    ddToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
  });

  document.addEventListener('click', (e) => {
    if (!dropdown?.contains(e.target)) {
      dropdown?.classList.remove('open');
      ddToggle?.setAttribute('aria-expanded', 'false');
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      dropdown?.classList.remove('open');
      ddToggle?.setAttribute('aria-expanded', 'false');
    }
  });

  document.querySelectorAll('.nav-links a').forEach(a => {
    a.addEventListener('click', () => links?.classList.remove('open'));
  });

  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    navbar?.classList.toggle('scrolled', window.scrollY > 10);
  });
</script>

</body>
</html>