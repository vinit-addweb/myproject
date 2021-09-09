<?php
class vinit

{
      final $num;
      function vi($v)
     {
       $this->num = $v;
       echo "the value is $this->num";

     }

}
$a=new vinit();
$a->vi("vinit");
?>