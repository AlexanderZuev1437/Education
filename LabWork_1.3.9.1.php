<?php
header("Content-Type: text/plain; charset=UTF-8");
define('N', PHP_EOL);
echo "Lab Work 1.3.9" . N .
    "Create recursive factorial calculator" . N . N;
function calculatingFactorial($n)
{
    if ($n == 0)
        return 1;
    else
        return ($n * calculatingFactorial($n - 1));
}

$var = rand(0, 10);
echo "Число: ", $var, N;
echo "Факториал = ", calculatingFactorial($var);

?>

