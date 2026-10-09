<?php
class View {
    public static function render(string $view, array $data = []): void {
        $file = APP_PATH . '/views/' . $view . '.php';
        if (!file_exists($file)) {
            http_response_code(500);
            echo "View tidak ditemukan: {$view}";
            return;
        }
        extract($data, EXTR_SKIP);
        require $file;
    }
}