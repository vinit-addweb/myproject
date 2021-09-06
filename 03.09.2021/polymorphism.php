<?php

abstract class bank 
{
    abstract function doc();

}
class hdfc extends bank 
{
    function doc()
    {
        echo " apply offline only";
    }
}
class  icici extends bank
{
    function doc()
    {
        echo "you can apply online also";
    }
}
$obj = new hdfc();
$obj ->doc();
?>