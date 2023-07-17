<!DOCTYPE html>
<html>
<body>

<?php

// Static keyword - can retain local value to use else where..

// everytime that the variables is executed inside a function the variables value will be deleted.


function test1() {
     static $x = 10;
     echo $x;
     $x++;
     
}

test1();
echo "<br>";

test1();
echo "<br>";

test1();
echo "<br>";

test1();
echo "<br>";

test1();
echo "<br>";

test1();
echo "<br>";

?>  

</body>
</html>