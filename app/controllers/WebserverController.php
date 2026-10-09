<?php
class WebserverController {

    public function index(): void {
        $hero = [
            'title' => 'Server yang <em>stabil, aman, dan cepat</em>.',
            'desc'  => 'Kami urus setup, migrasi, konfigurasi, dan maintenance server Anda — dari VPS kecil hingga cluster multi-node. Fokus pada bisnis, bukan urusan teknis.',
            'stats' => [
                ['value' => '99.9%', 'label' => 'Uptime SLA'],
                ['value' => '24/7',  'label' => 'Monitoring'],
                ['value' => '1-3',   'label' => 'Hari Setup'],
            ],
        ];

        $packages = [
            ['name' => 'Setup', 'price' => '2jt', 'tagline' => 'Untuk sekali setup server',
             'features' => ['Konsultasi spesifikasi','Instalasi OS & web server','Konfigurasi database','Setup SSL Let\'s Encrypt','Firewall dasar','Dokumentasi serah terima'],
             'cta' => 'Pilih Setup', 'featured' => false],
            ['name' => 'Managed', 'price' => '1,5jt/bln', 'tagline' => 'Paling populer untuk production',
             'features' => ['Setup + konfigurasi lengkap','Optimasi performa & caching','Backup harian otomatis','Monitoring 24/7 dengan alert','Patch keamanan berkala','Support prioritas 1 jam','Laporan bulanan'],
             'cta' => 'Pilih Managed', 'featured' => true],
            ['name' => 'Enterprise', 'price' => 'Custom', 'tagline' => 'Multi server & high availability',
             'features' => ['Cluster multi-node','Load balancer & auto scaling','CI/CD pipeline setup','Disaster recovery plan','Dedicated engineer','SLA 99.99%','Audit keamanan tahunan'],
             'cta' => 'Hubungi Kami', 'featured' => false],
        ];

        $faqs = [
            ['q' => 'Provider VPS apa saja yang didukung?', 'a' => 'Kami support semua provider populer: DigitalOcean, Vultr, Linode, AWS, GCP, Biznet, IDCloudHost, Contabo, dan lainnya.'],
            ['q' => 'Kalau saya sudah punya server, bisa dibantu?', 'a' => 'Tentu. Kami bisa audit, optimasi, dan perbaiki konfigurasi server existing Anda tanpa harus migrasi ke provider lain.'],
            ['q' => 'Apakah termasuk domain & SSL?', 'a' => 'Domain dibeli terpisah oleh Anda. SSL (Let\'s Encrypt) kami pasang dan perpanjang otomatis sebagai bagian dari layanan.'],
            ['q' => 'Bagaimana kalau server down?', 'a' => 'Paket Managed dan Enterprise punya respon prioritas. Kami monitoring 24/7 dan akan langsung tangani saat ada insiden.'],
            ['q' => 'Bisa handle aplikasi apa saja?', 'a' => 'Ya — Laravel, Node.js, Next.js, Python, WordPress, Docker, dan stack modern lainnya. Kami sesuaikan konfigurasi dengan kebutuhan aplikasi.'],
        ];

        View::render('webserver', [
            'page_title' => 'Web Server — Setup, Migrasi & Managed Service — Natamaya',
            'page_desc'  => 'Layanan setup, migrasi, optimasi, dan maintenance web server. VPS, cloud, atau dedicated — dari single node hingga cluster.',
            'hero'       => $hero,
            'packages'   => $packages,
            'faqs'       => $faqs,
        ]);
    }
}