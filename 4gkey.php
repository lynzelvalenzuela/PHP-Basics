<!DOCTYPE html>
<html>
<body>

<?php
// "Global" Keyword can be used to access global variables that are inside the function

// can be used $GLOBALS[array]


$x = 30;
$y = 20;

function test1() {
  GLOBAL  $x, $y, $sum;
     
	 $y = $x + $y; 
} 

test1(); // Execute Function

echo $y; // Output new Value of Variable $y


echo "<br> $x";


?>



</body>
</html>