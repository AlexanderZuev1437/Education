<?php
header("Content-Type: text/plain; charset=UTF-8");
define('N', PHP_EOL);
echo "Lab Work 1.3.7" . N .
    "Create simple calculator" . N . N;
function calculateSum($var1, $var2)
{
    echo "Сумма равна = ", $var1 + $var2, N;
}

function myltiply($var1, $var2)
{
    echo "Результат умножения = ", $var1 * $var2, N;
}

$rvar1 = rand(0, 50);
$rvar2 = rand(0, 50);
echo "Даны значения: ", $rvar1, " и ", $rvar2, N;
calculateSum($rvar1, $rvar2);
myltiply($rvar1, $rvar2);
?>

