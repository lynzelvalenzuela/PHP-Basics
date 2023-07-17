<!DOCTYPE html>
<html>
<body>

<?php

//contant identifier for a given value, cant be change during the script as a variable can.
//automatic Global


// Case-Sensitive
$WELCOME = "Welcome to PHP Programming";

define("WELCOME", "Welcome to PHP Programming");
echo WELCOME;


define("WELCOME", "Welcome to PHP Programming");

echo "<hr />";

// Case-Insensitive
define("GREETING", "Welcome to W3Schools.com!");
echo greeting;

echo "<hr />";


// Constants are Global
define("COLOR", "Red");
function color() {
    echo COLOR;
}
 
color();

?>  

</body>
</html>