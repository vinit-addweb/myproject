<?php

// yield keyword

function result($s)
{
    yield 1;
    yield 2;
    yield 3;

}
 foreach (result($s)as $i)
 {
     echo $i;
     echo "<br>";
 }

 // return keyword

 function r()
 {
     return 1;

 }
 echo r();

?>