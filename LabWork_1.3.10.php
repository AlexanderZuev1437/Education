<?php
header("Content-Type: text/plain; charset=UTF-8");
define ('N',PHP_EOL);
echo "Lab Work 1.3.10" . N .
    "Create simple text output" . N . N;

$gran = '----------------';
$cont = 'Я ем грушу';
function drawDelimeter (){
    global $gran;
    echo $gran . N;
}
$drawContentString = function () use ($cont) {
    echo $cont.N;
};

drawDelimeter();
$drawContentString();
drawDelimeter();
?>

