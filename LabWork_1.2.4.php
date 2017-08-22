<!Для распознавания русских символов>
<meta charset="UTF-8">

<?php
/*Создание константы для перехода на новую строку
  т.к. PHP_EOL отказался работать*/
define('N', "</br>");
define('ConstA', 5);
define('ConstB', 'cat');

echo "Lab Work 1.2.4" . N .
    " Using custom and predefined constants " . N . N;
echo "Маршрут в директорию скрипта " . N, __DIR__, N . N .
    "Имя файла сценария " . N, __FILE__, N . N .
    "Номер текущей исполняемой строки " . N, __LINE__, N . N .
    "Для примера уже созданы константы: ConstA = ", ConstA, ' и СonstB = ', ConstB;

?>

<form action="LabWork_1.2.4.php" method="GET">
    Введите имя константы:<br>
    <input type=text name=value style="width: 60px "><br>
    <input type=submit value="Проверить">
</form>

<?php
if (defined($_GET['value'])) {
    echo "Такая константа существует, введите другое имя" . N . N;
} else {
    echo "Такой константы не существует." . N . N;
}
?>


