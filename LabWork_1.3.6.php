<?php
header("Content-Type: text/plain; charset=UTF-8");
define('N', PHP_EOL);
echo "Lab Work 1.3.6" . N .
    "Create simple script for printing message" . N . N;
function printHelloMessage()
{
    echo "Hello! Welcome Again";
}

function printGoodBayMessage()
{
    echo "Good Buy! Have a nice day!";
}

$isWelcome = rand(1, 2) == 1 ? $isWelcome = true : $isWelcome = false;
if ($isWelcome == true) {
    printHelloMessage();
} else {
    printGoodBayMessage();
}
?>

