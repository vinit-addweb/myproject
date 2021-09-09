
<?php
//call by value
$a = 1;
$b = 2;

function dis($a,$b)
{
    $t = $a;
    $a = $b;
    $b = $t;
    echo $a;
    echo $b;
}
echo $a;
echo "$b <br>";
dis($a,$b)

?>