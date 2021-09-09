<?php
function largest($x=0, $y=8, $z=7) {
  $max = $x;

  if ($x >= $y && $x >= $z)
    $max = $x;
  elseif ($y >= $x && $y >= $z)
    $max = $y;
  else 
    $max = $z;
  
  echo "largest number is $max <br>";
}

largest(12, 50, 25);
largest(70, 50, 25);
?>