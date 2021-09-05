<?php

class parents 
{
    public $a;
    function hello()
    {
        $this ->a = "This is parent";
        return $this ->a;
    }
}
class child extends parents
{

   function hello()
   {
    $this ->a = "This is child";
    return $this ->a;
   }

}

$a = new parents;
$b = new child;
echo $a-> hello(). "<br>";

echo $b->hello();
?>