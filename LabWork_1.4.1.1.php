<?php
header("Content-Type: text/plain; charset=UTF-8");
define('N', PHP_EOL);
echo "Lab Work 1.4.1.1" . N .
    "Create simpe calculator " . N . N;

echo "Входной массив" . N;
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
foreach ($arr as $value) {
    $value = rand(0, 10);
    echo $value, " ";
}

?>

