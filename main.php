<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 18/02/2019
 * Time: 21:55
 */

//task 1

$a = 5;
$b = 4;

if($a > 0 && $b > 0) {
    echo $a - $b;
} else if ($a < 0 && $b < 0) {
    echo $a * $b;
} else {
    echo $a + $b;
}
