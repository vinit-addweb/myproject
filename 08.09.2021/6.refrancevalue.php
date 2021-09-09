<?php
// call by reference 
$a = 1;
$b = 2;
function display($a,$b)
{
    $t = $a;
    $a = $b;
    $b = $t;
}
echo $a;
echo $b;
echo "<br>";
display($a,$b);
echo "the value of a is: $a <br>";
echo "the value of b is: $b <br>";
?>