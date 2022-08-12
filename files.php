<?php
    echo readfile("test.txt"), "<br>";

    echo "<br>";

    $f = fopen("test.txt", "r") or die("Unable to open");
    while(!feof($f)){
        echo fgets($f), "<br>";
    }
    fclose($f);
    echo "<br>";

    $f = fopen("testwrite.txt", "w") or die("Unable to open");
    fwrite($f, "The old file is dead\n");
    fclose($f);

    $f = fopen("testwrite.txt", "a") or die("Unable to open");
    fwrite($f, "This is the new second line\n");
    fclose($f);

    $f = fopen("testwrite.txt", "r") or die("Unable to open");
    while(!feof($f)){
        echo fgets($f), "<br>";
    }
    fclose($f);
    echo "<br>";

?>