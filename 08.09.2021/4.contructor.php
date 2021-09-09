<?php

class p
{
    public function __construct()
    {
        
        echo "hello";
    }
}
class l extends p
{
  
}
$o = new l();
?>
<?php

class p
{
    public function __construct()
    {
        
        echo "hello <br>";
    }
}
class l extends p
{
  function v(){
      echo"hi ";
  }
}
$o = new l();
$o->v();
?>
