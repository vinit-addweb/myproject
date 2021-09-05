<?php
class Fruit {
  public $name;

  function __construct($name) {
    $this->name = $name;

  }
  
}
class m extends Fruit
{
  function get() {
    return "My name is ".$this->name;

  }
}

$a = new m("Vinit");
echo $a->get();

?> 