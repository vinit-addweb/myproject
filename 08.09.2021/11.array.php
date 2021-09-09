<?php

$i = array(1,2,3,4,5,6,7);
function p(&$j)
{
    $j[1] = 100;
    echo "updated array";
    print_r ($j);
}
p($i);
echo"<br>";
echo "orignal array<br>";
print_r($i);
?>