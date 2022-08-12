<?php
    date_default_timezone_set("Asia/Dhaka");
    echo "Todays date is ", date("Y:m:d"), "<br>";
    echo "The time is ", date("H:i:s"), " or ", date("h:i:s:a "),"<br>";

    $d=mktime(11, 14, 54, 8, 12, 2022);
    echo "Created date is " . date("Y-m-d h:i:sa", $d),"<br>";

    $d=strtotime("10:30pm April 15 2022");
    echo "Converted date is " . date("Y-m-d h:i:sa", $d),"<br>";

    $d=strtotime("Next Friday");
    echo "Converted date is " . date("Y-m-d h:i:sa", $d),"<br>";
?>