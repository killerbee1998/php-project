<?php

use Car as GlobalCar;

class Car {
  protected $name;
  protected $color;

  function __construct($name, $color){
    $this->name = $name;
    $this->color = $color;
  }

  public function set_name($name) {
    $this->name = $name;
  }
  public function get_name() {
    return $this->name;
  }
}

class F1 extends Car{
    public $speed;

    public function set_speed($speed) {
        $this->speed = $speed;
    }
    public function get_speed() {
        return $this->speed;
    }

    function __construct($name, $color){
        $this->name = $name." F1 team";
        $this->color = $color." F1 team";
    }
}

class Sedan extends Car{
    public $capacity;

    public function set_capacity($capacity){
        $this->capacity = $capacity;
    }

    public function get_capacity(){
        return $this->capacity;
    }

    function __construct($name, $color){
        $this->name = $name." Sedan team";
        $this->color = $color."Sedan team";
    }

}

$mer = new F1("Mercedes", "Black");
echo $mer->get_name(), "<br>";
$mer->set_speed(40);
echo $mer->get_speed(), "<br>";

echo "<br>";

$mer = new Sedan("Toyota", "White");
echo $mer->get_name(), "<br>";
$mer->set_capacity(4);
echo $mer->get_capacity(), "<br>";
?>