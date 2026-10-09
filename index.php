<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

/**
 * Natamaya — Front Controller
 */

require __DIR__ . '/app/config.php';
require __DIR__ . '/app/helpers.php';
require __DIR__ . '/app/core/View.php';
require __DIR__ . '/app/models/ServiceModel.php';
require __DIR__ . '/app/controllers/HomeController.php';
require __DIR__ . '/app/controllers/ServiceController.php';
require __DIR__ . '/app/controllers/WebserverController.php';
require __DIR__ . '/app/controllers/LoginController.php';

$uri = $_GET['url'] ?? '';
if ($uri === '') {
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    if (strpos($uri, BASE_URL) === 0) {
        $uri = substr($uri, strlen(BASE_URL));
    }
}
$uri = trim($uri, '/');

$routes = [
    ['GET',  '',                      'HomeController@index'],
    ['GET',  'service/([a-z\-]+)',    'ServiceController@detail'],
    ['GET',  'webserver',             'WebserverController@index'],
    ['GET',  'login',                 'LoginController@index'],
    ['POST', 'login/authenticate',    'LoginController@authenticate'],
];

$matched = false;
foreach ($routes as [$method, $pattern, $handler]) {
    if ($method !== $_SERVER['REQUEST_METHOD']) continue;

    $regex = '#^' . $pattern . '$#';
    if (preg_match($regex, $uri, $matches)) {
        [$class, $action] = explode('@', $handler);
        $controller = new $class();
        $params = array_slice($matches, 1);
        $controller->$action(...$params);
        $matched = true;
        break;
    }
}

if (!$matched) {
    http_response_code(404);
    View::render('404', [
        'page_title' => 'Halaman Tidak Ditemukan — Natamaya',
    ]);
}