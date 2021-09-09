<?php

interface a
{
    function ab();

}
interface b 
{
    function cd();
}
interface c extends a,b
{
    function d();
    

    }

class f implements a,b,c
{
    function ab(){
        echo "hi <br>";
    }
    function cd(){
        echo "hello <br>";
    }
    function d(){
        echo "hola <br>";
    }
}
$o = new f();

$o->ab();
$o->cd();
$o->d();

?>
