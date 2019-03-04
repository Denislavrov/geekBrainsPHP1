<?php

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../engine/functions.php';

echo render(TEMPLATES_DIR . 'index.tpl', [
    'title' => 'Gallery',
    'h1' => 'Gallery',
    'content' => createGallery()
]);
?>

