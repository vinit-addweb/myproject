<?php

class any
{
    static $a;
   public static function display($name)
    {
        self::$a = $name;
        return "Hello ".self::$a;
    }
}
echo any::display("vinit");

?>