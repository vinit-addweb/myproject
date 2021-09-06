<?php
class p
{
private $name ="vinit";
    public function __get($p)
    {
        echo "your are accessing private proerty";
    }
}
$a = new p();
echo $a->$name;
?>