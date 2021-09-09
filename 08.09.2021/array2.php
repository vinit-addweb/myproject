<?php

//call by reference
$a = array(1,23,4,8,68,6);
function u(&$arr)
{

    $arr[0] = 0;
    echo "updated array";
    print_r ($arr);

}
u($a);
echo"<br>";
echo "orignal array<br>";
print_r($a);
?>
