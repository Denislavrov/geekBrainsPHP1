<?php

require_once '../config/config.php';

echo '<pre>';
var_dump($_POST);
var_dump($_FILES); //тут хранится информация о загружаемых файлахs
echo '</pre>';

//userfile - имя name заданное для input типа file
//Если $_FILES['userfile'] существует, и нет ошибок
if(!empty($_FILES['userfile']) && !$_FILES['userfile']['error']) {
	$file = $_FILES['userfile'];

	//выбираем деррикторию куда загружать изображение
	$uploaddir = WWW_DIR . '/uploads/';

	//выбираем конечное имя файла
	$uploadfile = $uploaddir . basename($file['name']);

	//Пытаемся переместить файл из временного местонахождения в постоянное
	if (move_uploaded_file($file['tmp_name'], $uploadfile)) {
		echo "Файл корректен и был успешно загружен.\n";
	} else {
		echo "Возможная атака с помощью файловой загрузки!\n";
	}
}

?>

<!-- показываю, что кнопка submit может так же передавать данные в POST|GET -->
<form action="" method="POST">
	<input type="submit" name="var1">
	<input type="submit" name="var2">
</form>

<!-- Тип кодирования данных, enctype, ДОЛЖЕН БЫТЬ указан ИМЕННО так -->
<form enctype="multipart/form-data" action="" method="POST">
	<!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла (в байтах) -->
	<!--	<input type="hidden" name="MAX_FILE_SIZE" value="30000" />-->
	<!-- Название элемента input определяет имя в массиве $_FILES -->
	Отправить этот файл: <input name="userfile" type="file" />
	<input type="submit" value="Send File" />
</form>
<!----TASK1------->
<form enctype="multipart/form-data" action="" method="POST">
    <input type="text" name="value1" />
    <select name="operation" id="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="value2">
    <input type="submit" value="=" name="result">
</form>
<?php

$val1 = $_POST['value1'];
$val2 = $_POST['value2'];
$select = $_POST['operation'];

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case $operation == '+':
            echo $arg1 + $arg2;
            break;
        case  $operation == "-":
            echo $arg1 - $arg2;
            break;
        case   $operation == "*":
            echo $arg1 * $arg2;
            break;
        case  $operation == "/":
            if(!$arg2 == 0) {
                echo $arg1 / $arg2;
                break;
            } else {
                echo 'error!';
                break;
            }
    }
}

mathOperation($val1, $val2, $select);
?>


<!--TASK2-->
<form enctype="multipart/form-data" action="" method="POST">
    <input type="text" name="value3" />
    <input type="text" name="value4"/>
    <input type="submit" name="plus" value="+">
    <input type="submit" name="subtraction" value="-">
    <input type="submit" name="multiplication" value="*">
    <input type="submit" name="division" value="/">
</form>

<?php

function calc(){
$val3 = $_POST['value3'];
$val4 = $_POST['value4'];
$plus = $_POST['plus'];
$subtraction = $_POST['subtraction'];
$mult = $_POST['multiplication'];
$div = $_POST['division'];
if($plus) {
        echo $val3 + $val4;
    } else if($subtraction) {
        echo $val3 - $val4;
    } else if($mult) {
        echo $val3 * $val4;
    } else {
        if(!$val4 == 0) {
            echo $val3 / $val4;
            } else {
            echo 'error!';
             }
    }
}
calc();
?>

