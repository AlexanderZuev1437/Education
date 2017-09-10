<!Для распознавания русских символов>
<meta charset="UTF-8">

<?php
/*Создание константы для перехода на новую строку
  т.к. PHP_EOL отказался работать*/
define('N', "</br>");

echo "Lab Work 1.2.2.3" . N .
    " Proceed math operations on different data types." . N .
    "Comparison float numbers " . N . N;

$ivar = 5;
$fvar1 = 2.5;
$fvar2 = 3.1;
$strvar1 = 'apple';
$strvar2 = 'pen';
$istrvar = '5man';

echo "Есть переменные \"" . N,
var_dump($ivar, $fvar1, $fvar2, $strvar1, $strvar2, $istrvar);
echo N . N . 'Выполняем след.действия:' . N . N .
    'Integer + string of numbers:' . N .
    "$ivar + $istrvar = ", var_dump($ivar + $istrvar);
echo N . N . 'String without numbers + Integer' . N .
    "$strvar1 + $ivar = ", var_dump($strvar1 + $ivar);
echo N . N . 'String without numbers + String without numbers' . N .
    "$strvar1 + $strvar2 = ", var_dump($strvar1 + $strvar2),
    N . 'Конкотенация: ', $strvar1 . $strvar2;
echo N . N . 'Float + Integer' . N .
    "$fvar1 + $ivar = ", var_dump($fvar1 + $ivar);
echo N . N . "Сравнение Float ожидаемый результат 5.6" . N .
    "$fvar1 + $fvar2 = 5.6" . N;

if ($fvar1 + $fvar2 == 5.6) {
    echo 'Верно';
} else {
    echo 'Не верно';
}
?>

