<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 11/03/2019
 * Time: 14:21
 */


function getProducts() {

    $sql = "SELECT * FROM `products` ORDER BY `products`.`name` ASC";

    return getAssocResult($sql);
}
