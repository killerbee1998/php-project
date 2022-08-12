<?php
    $a = 0;
    while($a<10){
        echo $a, "<br>";
        $a+=1;
    }

    echo "<br>";
    do{
        echo $a, "<br>";
        $a+=1;
        if($a===11){
            $a = 0;
        }

    }while($a<10);

    echo "<br>";
    $ara = array(1,2,3,4,5,6);
    for($i=0;$i<count($ara);$i++){
        echo $ara[$i], "<br>";
    }

    echo "<br>";
    foreach($ara as $nums){
        echo $nums, "<br>";
    }
    
?>