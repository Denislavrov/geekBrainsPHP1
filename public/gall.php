<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 04/03/2019
 * Time: 13:05
 */

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../engine/functions.php';
require_once __DIR__ . '/../engine/gallery.php';

$images = getGallery();
$galleryContent = createGallery($images);

echo render(TEMPLATES_DIR . 'gall.tpl', [
    'title' => 'Gallery',
    'content' => $galleryContent
]);
