<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 23/02/2019
 * Time: 15:31
 */
//task1
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//echo $abraCadabra;
//var_dump();
//require '';

//task2
//task3
    $a = 5;
    $b = '05';
    var_dump($a == $b);         // приведение типов $b преобразует в int ранвый 5
    var_dump((int)'012345');     // приведение типов преобразует в int!
    var_dump((float)123.0 === (int)123.0); //int целочисленное число float дробное поэтому false
    var_dump((int)0 === (int)'hello, world'); // строку hello word преобразует в число равное 0
//task4

$h1 = 'Hello World!';
$title = 'The time is now!';
?>

<html>
<head></head>
<body>
<h1><?= $h1 ?></h1>
<div><?= $title ?></div>
</body>
</html>
<br/>
<br/>
//task5
<br/>
<?php
$a = 3;
$b = 5;

$a = $a + $b;
$b = $b - $a;
$b = -$b;
$a = $a - $b;

echo 'a=' .$a;
echo '<br/>';
echo 'b=' .$b;


