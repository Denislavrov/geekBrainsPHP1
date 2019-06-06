task1<br/>
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

if($a >= 0 && $b >= 0) {
    echo $a - $b;
} else if ($a < 0 && $b < 0) {
    echo $a * $b;
} else {
    echo $a + $b;
}
?>
<br/>
<br/>
task2
<br/>
<?php
//task2

$a = 10;
switch ($a){
    case 10: echo $a++;
    case 11: echo $a++;
    case 12: echo $a++;
    case 13: echo $a++;
    case 14: echo $a++;
    case 15: echo $a++;
    break;
}
?>
<br/>
<br/>
task3
<br/>
<?php
    function plus($a, $b) {
        return $a + $b;
    }

    function subtraction($a, $b) {
        return $a - $b;
    }

    function multiplication($a, $b) {
        return $a * $b;
    }
    function division ($a, $b) {
        return $a / $b;
    }
?>
<br/>
<br/>
task4
<br/>
<?php
    function mathOperation($arg1, $arg2, $operation) {
        switch ($operation) {
            case "+":
                echo plus($arg1, $arg2);
                break;

            case  "-":
                echo subtraction($arg1, $arg2);
                break;

            case  "*":
                echo multiplication($arg1, $arg2);
                break;

            case  "/":
                echo division($arg1, $arg2);
                break;
        }
    }

//    mathOperation(3,4, '+');
//    mathOperation(3,4, '-');
//    mathOperation(3,4, '*');
   mathOperation(3,4, '/');

?>



<footer class="footer" style="position: fixed; bottom: 0; text-align: center">
    task5
    <div class="this__year"><?php echo date('Y') ?></div>
</footer>

<br/>
<br/>
<br/>
task6<br/>
<?php
function power($val, $pow) {
        if($pow == 0)
            return 1;

        if($pow < 0 ) {
            return power(1/$val, -$pow);
        }

        return $val * power($val, $pow - 1);
}


echo(power(2, 3));
?>

<br/>
<br/>
<br/>
task7
<br/>
<br/>
<?php


function plur($num, $text1, $text2, $text3) {

    $num_end = $num % 10;

    if ($num >= 11 && $num <= 14) {
        return $num.' '.$text2;
    } else if ($num_end >= 2 && $num_end <= 4) {
        return $num.' '.$text3;
    } else if($num == 1 && $num_end == 1) {
            return $num. ' '.$text1;
    } else if ( $num >= 2 && $num <= 4 ) {
            return $num.' '.$text3;
    } else {
        return $num.' '.$text2;
    }
}

echo plur(22, 'час', 'часов', 'часа').
    '  '.plur(15, 'минута','минут', 'минуты' );
echo "<br/>";
echo plur(21, 'час', 'часов', 'часа').
    '  '.plur(43, 'минута','минут', 'минуты' );
