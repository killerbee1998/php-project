<?php
class Pi{
  public static $value=3.14159;
}

class Tau extends pi {
  public function getTau() {
    return 2*parent::$value;
  }
}

echo tau::$value, "<br>";

$x = new Tau();
echo $x->getTau(), "<br>";
?>