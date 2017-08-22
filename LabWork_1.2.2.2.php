<?php
/*Lab work 1.2.2.2
  Change variable types
*/
echo "Lab work 1.2.2.2 " . PHP_EOL . "34";
echo "<br />";
echo 'Change variable types';
echo "<br />";

class dog
{
    function golos()
    {
        echo 'Gav-Gav';
    }
}

class cat
{

}

$d = new dog();
$M = [[3, null, '11apple'],
    [4.5, $d],
    [false]];
var_dump($M);

echo "\n\r";
echo "After";
echo "<br />";

$M[1][1] = new cat();
$M[1][0] = (int)$M[1][0];
$M[0][2] = (int)$M[0][2];

var_dump($M);
echo "<br />";
echo $M[0][2];
$M = (string)$M;
echo PHP_EOL;
echo "<br />";
echo $M;
$N = [1, 2, 3];
echo "<br />";
echo $N;
$N = new cat();
var_dump($N);

?>

