<?php
header("Content-Type: text/plain; charset=UTF-8");
define('N', PHP_EOL);
echo "Lab Work 1.3.7" . N .
    "Create simple calculator" . N . N;
function getRandomNumber()
{
    $var = rand(0, 10);
    return ($var);
}

function calculateSum($var1, $var2)
{
    return $var1 + $var2;
}

function myltiply($var1, $var2)
{
    return $var1 * $var2;
}

$rvar1 = getRandomNumber();
$rvar2 = getRandomNumber();
echo "Даны значения: ", $rvar1, " и ", $rvar2, N;
echo "Сумма равна = ", calculateSum($rvar1, $rvar2), N;
echo "Результат умножения = ", myltiply($rvar1, $rvar2), N;

?>

