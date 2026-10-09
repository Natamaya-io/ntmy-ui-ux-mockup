<?php
$page_title = $page_title ?? 'Natamaya — Digital Agency untuk Bisnis Modern';
$page_desc  = $page_desc  ?? 'Natamaya — Digital agency. Jasa pembuatan website, e-commerce, custom application, dan landing page.';
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?= e($page_desc) ?>">
<meta name="author" content="Natamaya">

<meta property="og:title" content="<?= e($page_title) ?>">
<meta property="og:description" content="<?= e($page_desc) ?>">
<meta property="og:type" content="website">

<title><?= e($page_title) ?></title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Instrument+Serif:ital@0;1&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= asset('css/style.css') ?>">
</head>
<body>

<?php require APP_PATH . '/views/partials/navbar.php'; ?>