<?php
header("Content-Type: text/plain; charset=UTF-8");

echo "LabWork 1.3.3" . PHP_EOL .
    "Create simple day checker" . PHP_EOL;
$simpleDay = 6;
switch ($simpleDay) {
    case 1:
        echo "Понедельник";
        break;
    case 2:
        echo "Вторник";
        break;
    case 3:
        echo "Среда";
        break;
    case 4:
        echo "Четверг";
        break;
    case 5:
        echo "Пятница";
        break;
    case 6:
        echo "Суббота" . PHP_EOL . "Выходной";
        break;
    case 7:
        echo "Воскресенье" . PHP_EOL . "Выходной";
        break;
}
?>