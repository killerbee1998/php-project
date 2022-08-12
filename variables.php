<?php
    $integer = 9;
    $floating = 1.4;
    $str = "HELLO";
    $bool = true;
    $ara = array(1,2,3,4,5,6);

    echo $integer, "<br>";
    echo $floating, "<br>";
    echo $str, "<br>";
    echo $bool, "<br>";

    for($i=0;$i<count($ara);$i++){
        echo $ara[$i], "<br>";
    }
?>