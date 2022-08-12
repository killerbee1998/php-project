<?php
class Car {
  public $name;
  public $color;

  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$lambo = new Car();
$ferrari = new Car();

$lambo->set_name("Lamborgini");
$ferrari->set_name("Ferrari");

echo $lambo->get_name();
echo "<br>";
echo $ferrari->get_name();
?>