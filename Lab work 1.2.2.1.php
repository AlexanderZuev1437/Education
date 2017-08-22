<?php
/*Lab work 1.2.2.1
  Create variables with different data types
*/
echo "Lab work 1.2.2.1 ";
echo "<br />";
echo 'Create variables with different data types';
echo "<br />";

class dog
{
    function golos()
    {
        echo 'Gav-Gav';
    }
}

$d = new dog();
$M[0] = array(3, null, 'apple');
$M[1] = array('Apple', $d);
$M[2] = false;
var_dump($M);
echo "<br />";
$d->golos();

?>

