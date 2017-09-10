<?php
//header("Content-Type: text/plain; charset=UTF-8");
define('N', "</br>");
echo "Lab Work 1.4.1.3" . N .
    " Create data storage " . N . N;
$arr = [
    wolf => [
        Name => 'Sasha',
        Age => 22,
        Gender => 'Man'],
    dog2 => [
        Name => 'Petya',
        Age => 15,
        Gender => 'Man'],
    cat => [
        Name => 'Masha',
        Age => 18,
        Gender => 'Woman'],
    nagibator => [
        Name => 'Vasya',
        Age => 11,
        Gender => 'Man']
];
echo 'Дан массив:' . N;
print_r($arr);
?>
<form action="LabWork_1.4.1.3.php" method="get">
    <p>Введите искомый никнэйм :</p><input type="text" name="nick"/>
    <p><input type="submit"/></p>
</form>

<?php
echo 'Дан массив:' . N;
var_export($arr);
$nick = $_GET['nick'];
var_export($arr[$nick]);

?>
