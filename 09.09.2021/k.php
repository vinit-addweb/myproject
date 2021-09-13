<?php 

class demo 
{
static $i=1;
function f()
{
    self::$i++;
}
}
class test extends demo{
    function f2(){
        self::f();
        echo self::f();
    }
}

/*$d= new test();
$d->f2();
$d->f2(); */
test::f2();
?>