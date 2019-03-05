<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 05/03/2019
 * Time: 11:47
 */

require_once __DIR__ . '/../config/config.php';

function getGallery() {

    $sql = "SELECT * FROM images ORDER BY `images`. `views` DESC ";

    return getAssocResult($sql);
}

function createGallery($images){
    $galleryContent = '';

    foreach ($images as $image) {

            $galleryContent .= render(TEMPLATES_DIR . 'galleryItem.tpl', [
                'src' => $image['src']
            ]);
        }
    return $galleryContent;
}