<?php

class p
{
    private $fname;
    private $lname;

    private function name($f,$l)
    {
        $this->fname = $name;
        $this->lname = $lname;

    }
    function __call($m,$a)
    {
       echo "this is private method -".$m;
    }
}
$o = new p();
$o-> name("vinit","dhunaria"); 
?>