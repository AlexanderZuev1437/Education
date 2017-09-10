<?php
//header("Content-Type: text/plain; charset=UTF-8");
define('N', "</br>");
echo "Lab Work 1.4.1.2" . N .
    " Create data storage" . N . N;
///Массив по условию
$arr = [
    wolf => ['Sasha', 22, 'M'],
    dog2 => ['Petya', 15, 'M'],
    cat => ['Masha', 18, 'W'],
    nagibator => ['Vasya', 11, 'M']
];
//Рассппечатка массива с выводом ключa
function printArray($arr)
{
    $key = key($arr);
    echo $key, " => ";
    for ($i = 0; $i < 3; $i++) {
        echo $arr[$key][$i], ' | ';
    }
    echo N;

}

//Поиск по ключу
function searchOfArray($arr, $nick)
{
    $counter = 0;
    while (key($arr) != null && $counter == 0) {
        $key = key($arr);
        if ($key == $nick) {
            echo "Найдено:";
            printArray($arr);
            $counter = 1;
            die("Поиск окончен");
        } else {

            next($arr);
        }

    }
    echo 'не найдено';
}

//Вывод изначального массива для наглядности
echo "Дан массив:", N . N;
while (key($arr) != null) {
    printArray($arr);
    next($arr);
}
reset($arr);
?>

    <form action="LabWork_1.4.1.2.php" method="get">
        <p>Введите искомый никнэйм :</p><input type="text" name="nick"/>
        <p><input type="submit"/></p>
    </form>

<?php
$nick = $_GET['nick'];
searchOfArray($arr, $nick);

?>