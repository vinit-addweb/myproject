<?php

final class father
{
    function vi()
    {
        echo "hello";
    }
}
class son extends father
{
   function vi()
   {
       echo "hello";
   }
}
$o = new son(); 
$o->vi();

?>