<?php

abstract class Car
{

abstract public function about();
abstract public function model($name, $year);
abstract public function rs(int $price);
}

class honda extends Car
{
    public function about()
    {
        echo "This about honda car <br>";
    }
    public function model($name,$year)
    {
        echo "Car name is $name and manufacturing year is $year <br>";
    }
    public function rs($price)
    {
    echo "Car price is $price <br>";
    }
}

$obj = new honda();
$obj->about();
$obj->model("amaze","2016");
$obj->rs("500000");
?>