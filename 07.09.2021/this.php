<?php

class this
{
    public $name;
    function display($n)
    {
        $this->$name = $n;
        return "My name is ".$this->$name;
    }
}
$obj = new this();
print $obj->display("vinit");


?>