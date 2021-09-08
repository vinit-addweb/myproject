<?php

class abc
{
    function __tostring()
    {
            return "can't print object as a string : " . get_class($this);
    }
}
$a = new abc();
echo $a;

?>