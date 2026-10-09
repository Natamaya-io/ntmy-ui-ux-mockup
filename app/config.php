<?php
/**
 * Konfigurasi global
 */

$scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
$base = rtrim(str_replace('\\', '/', dirname($scriptName)), '/');

define('BASE_URL',  $base);
define('APP_PATH',  __DIR__);
define('ROOT_PATH', dirname(__DIR__));
define('ASSET_PATH', BASE_URL . '/assets');

define('SITE_NAME',    'Natamaya');
define('SITE_EMAIL',   'nurmustaqiim13@gmail.com');
define('SITE_PHONE',   '+62 896-5723-4709');
define('SITE_WA',      '6289657234709');
define('SITE_ADDRESS', 'Depok, Indonesia');