<?php

class automatic
{
    // constractor method
    function __construct()
    {
        echo "This is constructor function ";
    }

    private $name ="vinit"
    public function __get($p)
    {
        echo "your are accessing private proerty($p)"
    }
}
$obj = new automatic();
$a = new automatic();
$a->name;
?>