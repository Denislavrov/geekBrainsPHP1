<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 23/02/2019
 * Time: 15:43
 */

//task1

function third() {
    $i = 0;
    while ($i <= 100) {
        if($i % 3 == 0 ) {
            echo $i. '<br/>';
        }
        $i++;
    }
}
third();
?>
<br/>
<br/>
<br/>
<br/>
<?php
//task2
function task2() {
    $i = 0;
    do {
        if ($i == 0) {
            echo $i. ' – это ноль.<br/>';
        } else if ($i % 2 == 0) {
            echo $i. ' – четное число.<br/>';
        } else {
            echo $i. ' – нечетное число.<br/>';
        }
        $i++;
    } while($i <=10);
}
task2();
?>
<br/>
<br/>
<br/>

<?php
//task3

$array = array (

    "Московская область" => array("Москва", "Зеленоград", "Клин" ),
    "Тульская область" => array("Тула", "Алексин", "Белев"),
    "Ленинградская область" => array("Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт")
    );

    foreach ($array as $key => $value) {
        echo $key . ':<br/> ';
        for ($i = 0; $i <=  count($value); $i++ ) {
            echo $value[$i].', ';
        }
        echo '<br/><br/>';
    }

//task4
function translit($str)
{
    $arr = array(
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ж' => 'j',
        'з' => 'z',
        'и' => 'i',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'y',
        'ф' => 'f',
        'x' => 'kh',
        'ц' => 'ts',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => 'shch',
        'ъ' => '“',
        'ы' => 'y',
        'ь' => '‘',
        'э' => 'eh',
        'ю' => 'yu',
        'я' => 'ya'
    );

    $str = strtr($str, $arr);
    $str =  mb_strtolower($str);
    return $str;
}
echo translit('тест приветики');
?>
<br/>
<br/>
<br/>

<?php
//task5
function replace($str) {
    $title = $str;
    $title = mb_ereg_replace('[^-0-9a-z]', '_', $title);
    $title = mb_ereg_replace('[-]+', '_', $title);
    $title = trim($title, '_');
    return $title;
}
echo replace('test test test');

echo '<br/><br/>';

//task7
    for($i=0; $i < 10; print $i++){}

//task8
echo '<br/>';
function k() {
    $array = array (

        "Московская область" => array("Москва", "Зеленоград", "Клин" ),
        "Тульская область" => array("Тула", "Алексин", "Белев"),
        "Ленинградская область" => array("Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт")
    );

    foreach ($array as $key => $value) {
        echo $key . ':<br/> ';
        for ($i = 0; $i <=  count($value); $i++ ) {
           if(substr($value[$i], 0) == 'К') {

               echo $value[$i]. '<br/>';
               echo 'z';
           }
        }
        echo '<br/><br/>';
    }
}
k();
echo '<br/><br/>';

//task 9

function translitReplace($str) {
    $arr = array(
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ж' => 'j',
        'з' => 'z',
        'и' => 'i',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'y',
        'ф' => 'f',
        'x' => 'kh',
        'ц' => 'ts',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => 'shch',
        'ъ' => '“',
        'ы' => 'y',
        'ь' => '‘',
        'э' => 'eh',
        'ю' => 'yu',
        'я' => 'ya'
    );
    $str = strtr($str, $arr);
    $str =  mb_strtolower($str);
    $str = mb_ereg_replace('[^-0-9a-z]', '_', $str);
    $str = mb_ereg_replace('[-]+', '_', $str);
    $str = trim($str, '_');
    return $str;
}

echo translitReplace('привет мир');