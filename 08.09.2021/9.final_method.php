<?php
class vinit
{
     final function v()
    {
        echo "hello";
    }
}
class vi extends vinit
{
     function v()
    {
        echo "hi";
    }
    
}

$o = new vinit();
$o->v();
$a = new vi();
$a->v();


?>