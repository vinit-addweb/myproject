<?php

class calculate
{
    public $pi = 3.14;
    function circumference($r)
    {
      $circumference = 2 * $this ->pi * $r;
      echo $circumference;
    }
    function area($r)
    {
      $Area = $this ->pi * ($r * $r) ;
      echo $Area;
    }
}     
    
    $result = new calculate();
    $r = 10;
        echo  "Radius of circle is: ".$r."<br>";
        echo "circumference of circle is: ";
          $result -> circumference($r);
    echo "<br>";
      
        echo "Area of circle is: ";
          $result ->area($r);
    
?>
