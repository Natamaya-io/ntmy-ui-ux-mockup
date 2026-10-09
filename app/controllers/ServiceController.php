<?php
class ServiceController {

    public function detail(string $slug): void {
        $service = ServiceModel::find($slug);

        if (!$service) {
            http_response_code(404);
            View::render('404', [
                'page_title' => 'Layanan Tidak Ditemukan — Natamaya',
            ]);
            return;
        }

        View::render('service', [
            'page_title' => 'Jasa ' . $service['title'] . ' — Natamaya',
            'page_desc'  => $service['hero']['desc'],
            'service'    => $service,
            'all'        => ServiceModel::all(),
        ]);
    }
}