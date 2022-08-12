<?php
    $a = 10;
    $b = 2;

    // arithmetic operators
    echo $a+$b , "<br>";
    echo $a-$b , "<br>";
    echo $a*$b, "<br>";
    echo $a/$b, "<br>";
    echo $a%$b, "<br>";
    echo $a**$b, "<br>";

    // assignment operators
    $c = 10;
    echo $c, "<br>";
    $c+=1;
    echo $c, "<br>";
    $c-=1;
    echo $c, "<br>";
    $c*=2;
    echo $c, "<br>";
    $c/=2;
    echo $c, "<br>";

    // logical operator
    $x = true;
    $y=false;
    echo $x and $y, "<br>";
    echo $x or $y, "<br>";
    echo $x xor $y, "<br>";
    echo !$x, "<br>";

    // string operators
    $str1 = "Hello ";
    $str2 = "World";
    echo $str1.$str2 , "<br>";
    $str1.=$str2;
    echo $str1;
?>