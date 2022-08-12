<?php
abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}

class Audi extends Car {
  public function intro() : string {
    return "I'm an $this->name car";
  }
}

class Volvo extends Car {
  public function intro() : string {
    return "I'm a $this->name car";
  }
}


$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";
?>