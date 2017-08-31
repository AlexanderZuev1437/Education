<?php
define('N', "</br>");
echo "Classwork".N;

function Factorial($var){
$f=1;
    while ($var!=1){
    $f=$f*$var;
    $var--;
}

return $f;
}
$var=rand(0,10);
echo "Дано число: ",$var,N,
    "Факториал равен= ",Factorial($var);


?>