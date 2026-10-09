<?php
class ServiceModel {

    private static array $data = [
        'company' => [
            'slug'  => 'company',
            'icon'  => 'globe',
            'title' => 'Company Profile',
            'short' => 'Website kredibilitas bisnis',
            'tag'   => 'Populer',
            'hero'  => [
                'title' => 'Website company profile yang <em>membangun kepercayaan</em>.',
                'desc'  => 'Tampilkan identitas bisnis Anda secara profesional. Website cepat, rapi, SEO-friendly, dan mudah dikelola — siap menaikkan kredibilitas di mata klien.',
                'image' => 'hero.jpg',
                'stats' => [
                    ['value' => '100%', 'label' => 'Costum Design'],
                    ['value' => '1-3',  'label' => 'Minggu Pengerjaan'],
                    ['value' => 'Free Maintance',  'label' => 'Selama 3 Bulan'],
                ],
            ],
            'features' => [
                ['icon' => 'layout',     'title' => 'Desain Custom',     'desc' => 'Layout dirancang khusus sesuai brand dan industri Anda, bukan template instan.',    'image' => 'desain-custom.jpg'],
                ['icon' => 'smartphone', 'title' => 'Fully Responsive',  'desc' => 'Tampil sempurna di desktop, tablet, dan smartphone tanpa kompromi.',              'image' => 'responsive.jpg'],
                ['icon' => 'search',     'title' => 'SEO On-Page',       'desc' => 'Struktur HTML semantic, meta tag, dan sitemap agar mudah diindeks Google.',        'image' => 'seo.jpg'],
                ['icon' => 'edit',       'title' => 'CMS / Admin Panel', 'desc' => 'Kelola konten, blog, dan halaman sendiri tanpa perlu developer.',                  'image' => 'cms.jpg'],
                ['icon' => 'zap',        'title' => 'Performa Cepat',    'desc' => 'Optimasi gambar, minifikasi aset, dan skor PageSpeed tinggi.',                     'image' => 'performa.jpg'],
                ['icon' => 'shield',     'title' => 'Aman & Terawat',    'desc' => 'SSL, backup rutin, dan update keamanan berkala.',                                  'image' => 'keamanan.jpg'],
            ],
            'packages' => [
                ['name' => 'Starter', 'price' => '3,5jt', 'tagline' => 'Cocok untuk UMKM & personal brand',
                 'features' => ['5 halaman statis','Desain custom 1x revisi','Responsive mobile','Form kontak','Domain & hosting 1 tahun','SSL certificate'],
                 'cta' => 'Pilih Starter', 'featured' => false],
                ['name' => 'Bisnis', 'price' => '7,5jt', 'tagline' => 'Paling banyak dipilih perusahaan',
                 'features' => ['Hingga 12 halaman','Blog & CMS admin panel','SEO on-page lengkap','Google Analytics setup','Multi bahasa (ID/EN)','Desain custom unlimited revisi','Support 3 bulan'],
                 'cta' => 'Pilih Bisnis', 'featured' => true],
                ['name' => 'Enterprise', 'price' => 'Custom', 'tagline' => 'Untuk korporasi & multi divisi',
                 'features' => ['Halaman tidak terbatas','Integrasi API & sistem internal','Multi user & role access','Server & domain dedicated','SLA & maintenance tahunan','Dedicated project manager'],
                 'cta' => 'Hubungi Kami', 'featured' => false],
            ],
            'deliverables' => [
                'Website siap online dengan domain Anda',
                'Akses admin panel & dokumentasi',
                'File source code lengkap',
                'Sesi training penggunaan (1x)',
                'Garansi bug fix 30 hari',
            ],
            'faqs' => [
                ['q' => 'Berapa lama proses pengerjaannya?', 'a' => 'Untuk paket Starter sekitar 2–3 minggu, Bisnis 4–6 minggu, dan Enterprise 2–3 bulan tergantung kompleksitas.'],
                ['q' => 'Apakah termasuk domain & hosting?', 'a' => 'Ya, untuk paket Starter dan Bisnis sudah termasuk domain dan hosting selama 1 tahun pertama.'],
                ['q' => 'Saya tidak paham teknis, apakah bisa?', 'a' => 'Tentu. Kami sediakan admin panel yang mudah dipakai — Anda bisa update konten tanpa coding.'],
                ['q' => 'Bagaimana kalau saya butuh revisi desain?', 'a' => 'Setiap paket punya kuota revisi yang jelas. Paket Bisnis dan Enterprise mendapat revisi desain tanpa batas selama development.'],
                ['q' => 'Apakah bisa request fitur tambahan?', 'a' => 'Bisa. Sampaikan kebutuhan Anda saat konsultasi — kami estimasi effort dan biaya tambahannya secara transparan.'],
            ],
        ],

        'landing' => [
            'slug'  => 'landing',
            'icon'  => 'rocket',
            'title' => 'Landing Page',
            'short' => 'Fokus konversi & lead',
            'tag'   => null,
            'hero'  => [
                'title' => 'Landing page yang <em>mengubah pengunjung</em> jadi pelanggan.',
                'desc'  => 'Halaman promosi satu fokus: konversi. Dirancang dengan copywriting, visual, dan CTA yang mendorong aksi.',
                'image' => 'hero.jpg',
                'stats' => [
                    ['value' => '3x Revisi', 'label' => 'Free Revisi'],
                    ['value' => '1-2',  'label' => 'Minggu Pengerjaan'],
                    ['value' => '100%',   'label' => 'Responsive Mobile'],
                ],
            ],
            'features' => [
                ['icon' => 'trending',   'title' => 'Konversi Tinggi',      'desc' => 'Layout & copywriting dioptimasi untuk mendorong aksi pengunjung.',                'image' => 'konversi.jpg'],
                ['icon' => 'zap',        'title' => 'Loading Super Cepat',  'desc' => 'Halaman ringan, single page, dan siap untuk campaign iklan.',                     'image' => 'loading.jpg'],
                ['icon' => 'smartphone', 'title' => 'Mobile First',         'desc' => 'Mayoritas traffic datang dari HP — kami prioritaskan mobile experience.',         'image' => 'mobile.jpg'],
                ['icon' => 'layout',     'title' => 'Lead Form Cerdas',     'desc' => 'Formulir sederhana dengan validasi & notifikasi real-time.',                       'image' => 'lead-form.jpg'],
                ['icon' => 'bar-chart',  'title' => 'Tracking Siap',        'desc' => 'Google Analytics, Meta Pixel, dan event conversion terpasang.',                   'image' => 'tracking.jpg'],
                ['icon' => 'edit',       'title' => 'A/B Testing Ready',    'desc' => 'Mudah dimodifikasi untuk uji variasi headline & CTA.',                             'image' => 'ab-testing.jpg'],
            ],
            'packages' => [
                ['name' => 'Basic', 'price' => '1,5jt', 'tagline' => 'Landing page sederhana',
                 'features' => ['1 halaman landing','Form lead capture','Responsive mobile','Domain & hosting 1 tahun','Tracking dasar'],
                 'cta' => 'Pilih Basic', 'featured' => false],
                ['name' => 'Pro', 'price' => '3,5jt', 'tagline' => 'Paling populer untuk campaign',
                 'features' => ['1 halaman landing + thank you page','Form lead + notif WhatsApp','Meta Pixel + Google Analytics','Copywriting support','A/B test 2 variasi','Support 3 bulan'],
                 'cta' => 'Pilih Pro', 'featured' => true],
                ['name' => 'Campaign', 'price' => 'Custom', 'tagline' => 'Multi varian & funnel',
                 'features' => ['Multi landing page','Funnel & automation','Integrasi CRM','Retargeting setup','Dedicated strategist','Laporan performa bulanan'],
                 'cta' => 'Hubungi Kami', 'featured' => false],
            ],
            'deliverables' => [
                'Landing page siap campaign',
                'Form lead + notifikasi email/WA',
                'Tracking pixel terpasang',
                'File source lengkap',
                'Panduan edit konten',
            ],
            'faqs' => [
                ['q' => 'Apakah bisa request copywriting?', 'a' => 'Bisa. Untuk paket Pro dan Campaign, kami bantu susun copywriting yang persuasif.'],
                ['q' => 'Bisa integrasi dengan WhatsApp?', 'a' => 'Ya, semua paket bisa integrasi form → WhatsApp atau email otomatis.'],
                ['q' => 'Apakah bisa multi bahasa?', 'a' => 'Bisa dengan tambahan effort. Cocok untuk campaign regional/lintas negara.'],
            ],
        ],

        'ecommerce' => [
            'slug'  => 'ecommerce',
            'icon'  => 'cart',
            'title' => 'E-Commerce',
            'short' => 'Toko online lengkap',
            'tag'   => null,
            'hero'  => [
                'title' => 'Toko online yang <em>mudah dipakai</em>, siap jualan.',
                'desc'  => 'Katalog produk, keranjang, checkout, dan payment gateway — semua terintegrasi rapi agar pelanggan betah belanja.',
                'image' => 'hero.jpg',
                'stats' => [
                    ['value' => '100%',  'label' => 'Sesuai Keinginan'],
                    ['value' => '3-5',  'label' => 'Minggu Pengerjaan'],
                    ['value' => 'Payment Gateway', 'label' => 'Transaksi Otomatis'],
                ],
            ],
            'features' => [
                ['icon' => 'package',     'title' => 'Katalog Produk',    'desc' => 'Kelola ribuan produk dengan kategori, varian, dan stok otomatis.',                  'image' => 'katalog.jpg'],
                ['icon' => 'credit-card', 'title' => 'Payment Gateway',   'desc' => 'Integrasi Midtrans, Xendit, atau payment gateway pilihan Anda.',                    'image' => 'payment.jpg'],
                ['icon' => 'user',        'title' => 'Member System',     'desc' => 'Login, riwayat pesanan, wishlist, dan poin reward untuk pelanggan.',                 'image' => 'member.jpg'],
                ['icon' => 'trending',    'title' => 'Laporan Penjualan', 'desc' => 'Dashboard analytics: penjualan harian, produk terlaris, dan lain-lain.',             'image' => 'laporan.jpg'],
                ['icon' => 'smartphone',  'title' => 'Mobile Shopping',   'desc' => 'Pengalaman belanja mulus dari HP — cart, checkout, tracking order.',                 'image' => 'mobile-shop.jpg'],
                ['icon' => 'shield',      'title' => 'Keamanan Data',     'desc' => 'SSL, enkripsi data, dan compliance standar e-commerce.',                              'image' => 'keamanan.jpg'],
            ],
            'packages' => [
                ['name' => 'Toko', 'price' => '8jt', 'tagline' => 'Cocok untuk UMKM & brand lokal',
                 'features' => ['Hingga 100 produk','Kategori & varian','Cart & checkout','Midtrans payment','Ongkir otomatis','Admin panel','Support 3 bulan'],
                 'cta' => 'Pilih Toko', 'featured' => false],
                ['name' => 'Bisnis', 'price' => '15jt', 'tagline' => 'Untuk brand berkembang',
                 'features' => ['Produk tidak terbatas','Member & poin reward','Multi payment gateway','Voucher & diskon','Laporan analitik','Integrasi marketplace','Support 6 bulan'],
                 'cta' => 'Pilih Bisnis', 'featured' => true],
                ['name' => 'Enterprise', 'price' => 'Custom', 'tagline' => 'Multi toko & skala besar',
                 'features' => ['Multi toko & gudang','API integration','ERP / POS sync','Custom fitur apapun','SLA & dedicated support','Konsultasi strategi digital'],
                 'cta' => 'Hubungi Kami', 'featured' => false],
            ],
            'deliverables' => [
                'Toko online siap transaksi',
                'Payment gateway aktif',
                'Admin panel produk & pesanan',
                'Integrasi ongkir otomatis',
                'Sesi training pengelolaan toko',
            ],
            'faqs' => [
                ['q' => 'Payment gateway-nya apa saja?', 'a' => 'Kami integrasikan Midtrans, Xendit, atau Duitku. Bisa juga custom sesuai request.'],
                ['q' => 'Bisa sinkron dengan marketplace?', 'a' => 'Bisa. Kami support integrasi Tokopedia, Shopee, dan marketplace populer lainnya.'],
                ['q' => 'Apakah termasuk ongkir otomatis?', 'a' => 'Ya, untuk paket Bisnis ke atas kami integrasikan dengan RajaOngkir/Biteship.'],
                ['q' => 'Bagaimana kalau produk saya ribuan?', 'a' => 'Sistem kami support import produk via CSV/Excel — cocok untuk katalog besar.'],
            ],
        ],

        'application' => [
            'slug'  => 'application',
            'icon'  => 'settings',
            'title' => 'Custom App',
            'short' => 'Aplikasi sesuai kebutuhan',
            'tag'   => 'Enterprise',
            'hero'  => [
                'title' => 'Aplikasi custom yang <em>mengikuti alur bisnis</em> Anda.',
                'desc'  => 'Bukan template. Sistem dirancang khusus dari nol sesuai proses operasional, struktur tim, dan target bisnis Anda.',
                'image' => 'hero.jpg',
                'stats' => [
                    ['value' => '100%',  'label' => 'Sesuai Alur'],
                    ['value' => '1-2',  'label' => 'Bulan Pengerjaan'],
                    ['value' => '6 Bulan', 'label' => 'Free Maintance'],
                ],
            ],
            'features' => [
                ['icon' => 'user',      'title' => 'Role & Permission',    'desc' => 'Multi user dengan hak akses berbeda per role & departemen.',                    'image' => 'role.jpg'],
                ['icon' => 'bar-chart', 'title' => 'Dashboard Analytics',  'desc' => 'Laporan & visualisasi data real-time sesuai KPI bisnis.',                        'image' => 'dashboard.jpg'],
                ['icon' => 'code',      'title' => 'API Integration',      'desc' => 'Integrasi ke sistem existing — ERP, CRM, payment, atau apapun.',                 'image' => 'api.jpg'],
                ['icon' => 'layers',    'title' => 'Modular Architecture', 'desc' => 'Mudah ditambah fitur tanpa merusak sistem yang sudah berjalan.',                 'image' => 'modular.jpg'],
                ['icon' => 'shield',    'title' => 'Audit & Log',          'desc' => 'Setiap aksi tercatat — penting untuk compliance dan audit trail.',               'image' => 'audit.jpg'],
                ['icon' => 'clock',     'title' => 'Long-term Support',    'desc' => 'Kami dampingi jangka panjang, bukan sekadar serah terima.',                      'image' => 'support.jpg'],
            ],
            'packages' => [
                ['name' => 'Modul', 'price' => '25jt', 'tagline' => 'Satu modul spesifik',
                 'features' => ['1 modul fungsional','Database design','Multi user basic','Dashboard dasar','API integration 1 sistem','Support 3 bulan'],
                 'cta' => 'Pilih Modul', 'featured' => false],
                ['name' => 'Sistem', 'price' => '60jt', 'tagline' => 'Aplikasi internal lengkap',
                 'features' => ['Hingga 5 modul','Role & permission','Advanced dashboard','Integrasi multi sistem','Deployment & training','Support 6 bulan'],
                 'cta' => 'Pilih Sistem', 'featured' => true],
                ['name' => 'Enterprise', 'price' => 'Custom', 'tagline' => 'Skala korporasi',
                 'features' => ['Modul tidak terbatas','Microservices architecture','High availability setup','Security audit','Dedicated team','SLA & maintenance tahunan'],
                 'cta' => 'Hubungi Kami', 'featured' => false],
            ],
            'deliverables' => [
                'Aplikasi siap pakai sesuai requirement',
                'Database & dokumentasi teknis',
                'Training penggunaan ke tim',
                'File source code lengkap',
                'Masa support & bug fix',
            ],
            'faqs' => [
                ['q' => 'Bisa mulai dari modul kecil dulu?', 'a' => 'Bisa. Kami rekomendasikan pendekatan MVP — bangun modul inti dulu, tambah fitur seiring waktu.'],
                ['q' => 'Teknologi apa yang dipakai?', 'a' => 'Stack menyesuaikan: PHP/Laravel, Node.js, Python/FastAPI, React/Vue. Kami pilih yang paling cocok.'],
                ['q' => 'Bagaimana kalau sistem existing saya legacy?', 'a' => 'Kami biasa integrasi via API atau database bridge. Tim kami akan analisis dulu di tahap discovery.'],
                ['q' => 'Apakah bisa self-hosted?', 'a' => 'Bisa. Kami support deployment di server Anda, cloud, atau hybrid sesuai kebutuhan keamanan.'],
            ],
        ],
    ];

    public static function all(): array {
        return self::$data;
    }

    public static function find(string $slug): ?array {
        return self::$data[$slug] ?? null;
    }

    public static function nav(): array {
        $out = [];
        foreach (self::$data as $slug => $s) {
            $out[] = [
                'slug'  => $slug,
                'icon'  => $s['icon'],
                'title' => $s['title'],
                'short' => $s['short'],
            ];
        }
        return $out;
    }
}