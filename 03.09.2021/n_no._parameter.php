<?php
 
 class sum
 {
     // splat operator
     function add(...$number)
     {
         $num = 0;
         foreach($number as $n)
         {
             $sum+=$n;
         }
         return $sum;
     }
 }
$obj = new sum;
echo "The sum of number is: ". $obj -> add(5,6,8,7,5,4,4,18,4,84,8,48,48,4,8,4);
?>
