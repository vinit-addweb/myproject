<?php
class a
{
    static $i=3;
    function N()
    { 
        self::$i++;
        echo Self::$i."<br>";
    }
}
echo a::$i."<br>";
$o =new a();
$o->N();
$o->N();
$o->N();

?>