<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 11/03/2019
 * Time: 14:10
 */
require_once __DIR__ . '/../config/config.php';

$products = getProducts();
var_dump($products);
$productsContent = renderProducts($products);


echo render(TEMPLATES_DIR . 'index.tpl', [
    'title' => 'Products',
    'h1' => 'Products',
    'content' => $productsContent
]);