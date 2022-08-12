<?php
trait carUtils{
    public function startEngine(){
        echo "VROOOOOM<br>";
    } 
}

class Audi{
  use carUtils;
}

class Volvo{
    use carUtils;
}

$audi = new Audi();
$audi->startEngine();

$volvo = new Volvo();
$volvo->startEngine();
?>