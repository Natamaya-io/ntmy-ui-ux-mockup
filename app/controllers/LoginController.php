<?php
class LoginController {

    public function index(): void {
        $benefits = [
            ['icon' => 'layers',    'title' => 'Pantau Semua Project',   'desc' => 'Lihat progress, milestone, dan timeline setiap project Anda dalam satu dashboard.'],
            ['icon' => 'edit',      'title' => 'Request & Revisi',       'desc' => 'Ajukan revisi atau fitur baru langsung dari dashboard — tidak perlu email bolak-balik.'],
            ['icon' => 'package',   'title' => 'File & Deliverable',     'desc' => 'Semua file, dokumentasi, dan hasil akhir tersimpan rapi dan bisa diunduh kapan saja.'],
            ['icon' => 'credit-card','title' => 'Invoice & Pembayaran',  'desc' => 'Lihat riwayat invoice, status pembayaran, dan download bukti transaksi.'],
            ['icon' => 'bar-chart', 'title' => 'Laporan Performa',       'desc' => 'Untuk project yang sudah live, pantau analytics, uptime, dan metrik performa.'],
            ['icon' => 'phone',     'title' => 'Support Prioritas',      'desc' => 'Hubungi tim support langsung dari dashboard — respon cepat untuk klien aktif.'],
        ];

        $faqs = [
            ['q' => 'Bagaimana cara mendapat akun client?',   'a' => 'Setiap klien yang sudah menandatangani kontrak akan otomatis mendapatkan akun. Kredensial dikirim via email yang Anda daftarkan.'],
            ['q' => 'Lupa password, bagaimana?',              'a' => 'Klik "Lupa Password" di form login. Link reset akan dikirim ke email Anda dalam beberapa menit.'],
            ['q' => 'Apakah bisa multi user?',                'a' => 'Ya. Untuk paket Bisnis dan Enterprise, Anda bisa mengundang anggota tim untuk mengakses dashboard dengan hak akses berbeda.'],
            ['q' => 'Apakah data saya aman?',                 'a' => 'Kami menggunakan enkripsi SSL, autentikasi dua faktor (opsional), dan server yang ter-hardening. Data Anda adalah prioritas kami.'],
        ];

        View::render('login', [
            'page_title' => 'Login Client — Natamaya',
            'page_desc'  => 'Masuk ke dashboard client Natamaya untuk memantau project, request revisi, dan akses semua file deliverable Anda.',
            'benefits'   => $benefits,
            'faqs'       => $faqs,
        ]);
    }

    public function authenticate(): void {
        // Placeholder — logic autentikasi akan ditambahkan nanti
        header('Location: ' . url('login'));
        exit;
    }
}