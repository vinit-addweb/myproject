<?php

interface Father
{
    function a();
}
interface Mother {
    function a();
}

class son implements Father,Mother
{
    function a()
    {
        echo "this is son";
    }
}
$o = new son();
$o -> a();
?>