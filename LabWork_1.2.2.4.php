<!Для распознавания русских символов>
<meta charset="UTF-8">

<?php
/*Создание константы для перехода на новую строку
  т.к. PHP_EOL отказался работать*/
define('N', "</br>");

echo "Lab Work 1.2.2.4" . N .
    " Create console application 
      that prints text strings in different formats  " . N;
$ivar = 2;
$svar = ' Карты ';
$svar2 = <<<EOD
 деньги $ivar
EOD;
$svar3 = <<<'EOT'
 ствола.
EOT;

echo N . "Выводимая строка которая включает в себя все задания:" . N . N;
echo '\'', $svar, $svar2, $svar3 . N . N;

echo "Где: " . N;
var_dump($svar, $svar2, $ivar, $svar3)

?>

