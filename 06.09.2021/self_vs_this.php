<?php

class student
{
     // using self keyword
 static $name;
 public static function display($nam)
 {
     self::$name = $nam;
     return "My name is ".self::$name;
 }
   // $this  keyword
 public $age;
 public function dis(int $age)
 {
     $this->age = $age;
     return "my age is ".$this->age;
 }
 
}
echo student::display("vinit"),"<br>";
 $a = new student;
echo $a->dis(24);

?>
