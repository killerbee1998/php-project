<?php
class Car {
  public $name;
  public $color;

  function __construct(){
    $this->name = "Car";
    $this->color = "None";
  }

  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }

  function __destruct(){
    echo "This Car named ", $this->name, " is being deleted";
    echo "<br>";
  }
}

$lambo = new Car();
$ferrari = new Car();

$lambo->set_name("Lamborgini");
$ferrari->set_name("Ferrari");

echo $lambo->get_name();
echo "<br>";
echo $ferrari->get_name();
echo "<br>";
?>