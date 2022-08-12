<?php

namespace Vehicle;

class Car{
    public $name;
    public $speed;
    
    public function __construct(){
        $this->name = "Car";
        $this->speed = 0;
        
    }
    public function message(){
        echo "<p>The speed of {$this->name} is  {$this->speed} km/h.</p>";
    }
}

?>

<!DOCTYPE html>
<html>

<body>

    <?php
    use Vehicle as V;
    $audi = new V\Car();
    $audi->name = "Audi";
    $audi->speed = 120;
    $audi->message();
    ?>

</body>

</html