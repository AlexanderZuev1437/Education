<!Для распознавания русских символов>
<meta charset="UTF-8">

"Lab Work 1.2.3"<br>
"Using predefined (superglobal) variables"
<br><br>
<!Форма для получения данных>
<form action="LabWork_1.2.3.php" method="GET">
    Name: <input type=text name=name style="width: 60px "><br>
    Возраст: <input type=text name=age style="width: 60px "><br>
    <input type=submit value="Отправить">
</form>

<?php
/*Создание константы для перехода на новую строку
  т.к. PHP_EOL отказался работать*/
define('N', "</br>");

echo "Привет, ", $_GET['name'], ' тебе ', $_GET['age'] . N . N;
echo 'Данные сервера: ' . N;
echo $_SERVER['SERVER_NAME'], N, $_SERVER['SERVER_ADDR'];

?>

