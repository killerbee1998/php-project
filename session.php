<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION["favfood"] = "Cookie";
$_SESSION["name"] = "Biscuit Badshah";
echo "Session variables are set.<br>";

echo "Your name is " . $_SESSION["name"] , "<br>";
echo "Your favorite food is " . $_SESSION["favfood"] , ".<br>";

session_destroy()
?>

</body>
</html>