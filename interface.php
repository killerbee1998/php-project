<?php

use Volvo as GlobalVolvo;

interface Car{
  public function startEngine();
}

class Volvo implements Car{
    public function startEngine(){
        echo "VROOM!!!!!!!!!! <br>";
    }
}

class Audi implements Car{
    public function startEngine(){
        echo "VROOOOOOOOOOM <br>";
    }
}


$car = new Volvo();
$car->startEngine();

$new_car = new Audi();
$new_car->startEngine();

?>