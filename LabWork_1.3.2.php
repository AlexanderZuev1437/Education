<!Для распознавания русских символов>
<meta charset="UTF-8">

<?php
/*Создание константы для перехода на новую строку
  т.к. PHP_EOL отказался работать*/
define('N', "</br>");

echo "Lab Work 1.3.2" . N .
    "Create simple string formatter русс" . N . N;
$Rvar = rand(1, 2);
$StrVar = ' appl';

/*Генерация случайной буквы
$Suf= chr(rand(65, 90));*/

//Генерация суфикса
$Suf = ($Rvar > 1) ? 'es' : 'e';
echo "I have ", $Rvar, $StrVar, $Suf;

?>

