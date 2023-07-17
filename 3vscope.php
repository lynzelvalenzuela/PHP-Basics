<!DOCTYPE html>
<html>
<body>


<?php
//Function is a block of statement that can be used repeatedly in a program 

//GLOBAL SCOPE EXAMPLE - declare outside the function

$x = 500; // global scope
  
function sample1() {
     // Will Generate Error because $x is outside the function
    $x = 100;
     echo "<p> SAMPLE1 Value of x is: $x</p>";
} 

$x=200;

echo $x;

sample1();
 // <- output the function

echo "<p>Value of x is: $x</p><hr />"; 

//LOCAL SCOPE EXAMPLE - can only be access inside the function 

function sample2() {
    $y = 10; // local scope
    echo "<p>SAMPLE2 Value of y is: $y</p>";
} 


sample2();

	// Will Generate Error because the $y is only for the function test2
	echo "<p>Value of y is: $y</p>";
?>

</body>
</html>