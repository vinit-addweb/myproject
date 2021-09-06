<?php
class d
{
function sum($i=5,$x=10)
{
    $add = $i+$x;
    return $add;
}
}
$a = new d;
echo "sum of two digit is: ".$a-> sum()."<br>";
echo "sum of two digit is: ".$a-> sum(10,20)."<br>";
echo "sum of two digit is: ".$a->sum(40);

?>