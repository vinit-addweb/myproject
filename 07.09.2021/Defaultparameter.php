<?php

class vinit
{ 
    
    function p($a,$b=7)
    {
        $add = $a + $b;
        echo "sum of numbers is: ".$add."<br>";
    }
} 
$obj = new vinit();
$obj->p(10);
$obj->p(10,8);
$obj->p(1,2);
?>