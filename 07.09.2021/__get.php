<?php

class g
{
    private $a="vinit";
    function __get($p)
    {
        echo "you cant access on private property";
    }

}
$o = new g();
$o->$a;

?>