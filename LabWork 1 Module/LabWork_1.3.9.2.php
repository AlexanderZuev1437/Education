<?php
header("Content-Type: text/plain; charset=UTF-8");
define('N', PHP_EOL);
echo "Lab Work 1.3.9.2" . N .
    "Create recursive number counter" . N . N;
function recursiveCounter($numb = 0)
{
    echo $numb . " ";
    return $numb < 50 ? recursiveCounter($numb + 1) : null;
}

recursiveCounter();
?>

