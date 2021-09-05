<?php
class Father
{
    protected $name;
    public function display()
    {
         $this ->name ="vinit"; 
         echo "my name is " .$this ->name;
    }
}
class son extends Father{
   public function Name()
   {
       echo "hello ".$this ->name;
   }
}
$obj = new son;
$obj ->display();
?>