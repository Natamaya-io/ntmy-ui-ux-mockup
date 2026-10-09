<?php
class HomeController {

    public function index(): void {
        $services = ServiceModel::all();

        $process = [
            ['step' => '01', 'title' => 'Konsultasi',       'desc' => 'Kami pelajari kebutuhan, target, dan tujuan bisnis Anda.'],
            ['step' => '02', 'title' => 'Perancangan',      'desc' => 'Wireframe & desain UI/UX dibuat sebelum masuk development.'],
            ['step' => '03', 'title' => 'Development',      'desc' => 'Coding bersih, terstruktur, dan siap dikembangkan lebih lanjut.'],
            ['step' => '04', 'title' => 'Launch & Support', 'desc' => 'Deploy, testing menyeluruh, dan dukungan pasca-launch.'],
        ];

        $testimonials = [
            ['name' => 'Andra Wijaya',   'role' => 'Founder, Kopi Nusantara', 'text' => 'Natamaya mengerjakan website company profile kami dengan cepat dan hasilnya melebihi ekspektasi.', 'init' => 'AW'],
            ['name' => 'Sinta Mahendra', 'role' => 'Owner, Batik Ayu',        'text' => 'Toko online kami sekarang jauh lebih rapi. Proses checkout lancar, dan tim Natamaya responsif.',   'init' => 'SM'],
            ['name' => 'Rizky Pratama',  'role' => 'CTO, LogistikOne',        'text' => 'Aplikasi internal yang dibangun Natamaya sangat membantu operasional harian tim kami.',           'init' => 'RP'],
        ];

        View::render('home', [
            'page_title'   => 'Natamaya — Digital Agency untuk Bisnis Modern',
            'page_desc'    => 'Natamaya — Digital agency. Jasa pembuatan website company profile, e-commerce, custom application, dan landing page.',
            'services'     => $services,
            'process'      => $process,
            'testimonials' => $testimonials,
        ]);
    }
}