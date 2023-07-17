<!DOCTYPE html>
<html>
<body>

<h2> PHP Arithmetic Operators </h2>
<!-- Used to Compare Two Values -->

<?php
	
	$x = 50; 
	$y = 20;


	//ADDITION
	$sum =  $x + $y;
	echo $sum;
	echo "<br>";

	echo $x + $y;
	echo "<hr />";
	
	//SUBTRACTION
	echo $x - $y;	
	echo "<hr />";	
	
	//MULTIPLICATION
	echo $x * $y;	
	echo "<hr />";	
	
	//DIVISION
	echo $x / $y;
	echo "<hr />";	
	
	//MODULUS
	echo $x % $y;
      
?>   

<h2> PHP Assignment Operator </h2>
<!-- Used with numeric values to write values to a variable -->

<?php
	
	// The left operand is assigned the value on the right
	$x = 20; 
	echo $x;
	
?> 

<h2> Comparison Operators </h2>
<!-- Used to compare two values (numer to a string) -->

<?php
	
	//Equal
	$x = 300; 
	$y = "300";
	var_dump($x == $y); // Output is True because x = y
	echo "equal <br>";




	//Identical
	$x = 300; 
	$y = "300";
	var_dump($x === $y); // Output is False because types are not equal
	echo "Identical <br>";

	//Not equal
	$x = 300; 
	$y = "300";
	var_dump($x != $y); // Output is False because Values are equal
	echo "Not Equal 1 <br>";

	//Not equal
	$x = 300; 
	$y = "300";
	var_dump($x <> $y); // Output is False because values are equal
	echo "Not Equal 2 <br>";
	
	//Not Identical
	$x = 300; 
	$y = "300";
	var_dump($x !== $y); // Output is TRUE because types are not equal
	echo "Not Identical <br>";

	//Greater than
	$x = 300; 
	$y = 500;
	var_dump($x > $y); // Output is False because x is not greater than y
	echo "Greater Than <br>";
	
	//Less than
	$x = 300; 
	$y = 500;
	var_dump($x < $y); // Output is True because x is less than y
	echo "Less Than <br>";
	
	
	//Greater than or equal to
	$x = 300; 
	$y = 500;
	var_dump($x >= $y); // Output is False because x not greater than or equal to y
	echo "Greater than or equal to <br>";
	
	
	//Less than or equal to
	$x = 300; 
	$y = 500;
	var_dump($x <= $y); // Output is True because x is less than y
	echo "Less than or equal to <br>";
	
	
?>

<h2> Increment/Decrement Operators </h2>
<!-- Used to Increment or Decremeent a variables value -->

<?php

	//Post-increment - Returns $x, then increments $x by one
	$x = 50; 
	echo $x++;
	echo " Post Incerement<hr />";

	//Pre-increment - Increments $x by one, then returns $x
	$x = 50; 
	echo ++$x;
	echo " Pre-Increment<hr />";
	
	//Pre-decrement - Decrements $x by one, then returns $x
	$x = 50; 
	echo --$x;
	echo " Pre- Decrement<hr />";
	
	//Post-decrement - Returns $x, then decrements $x by one
	$x = 50; 
	echo $x--;
	echo " Post- Decrement<hr />";

?>

<h2> Logical Operators </h2>
<!-- Used to combine conditional statements -->

<?php 

	//And - True if both $x and $y are true
	$x = 200; 
	$y = 300;

	if ($x == 200 and $y == 300) {
	echo "AND True";
	echo "<hr />";
	}
		
	//Or - True if either $x or $y is true
	$x = 200; 
	$y = 300;

	if ($x == 200 or $y == 90) {
	echo "OR True";
	echo "<hr />";
	}
	
	//And - && - True if both $x and $y are true
	$x = 200; 
	$y = 300;

	if ($x == 200 && $y == 300) {
	echo "AND && True";
	echo "<hr />";
	}
	
	//Or - $x || $y - True if either $x or $y is true
	$x = 200; 
	$y = 300;

	if ($x == 200 || $y == 80) {
	echo "OR || True";
	echo "<hr />";
	}
	
	//Not - !$x - True if $x is not true
	$x = 200; 
	$y = 300;

	if ($x !== 100) {
	echo "NOT !== True";
	echo "<hr />";
	}

?>

<h2> PHP String Operators </h2>
<!-- Used to Specifically for Strings -->

<?php

	//Concatenation - Concatenation of $x and $y
	$x = "Hello";
	$y = " world!";
	echo $x, $y;
	echo "<hr />";
	
	//Concatenation assignment - Appends $txt2 to $txt1
	$x = "John";
	$y = " Smith";
	
	$x .= $y;
	echo $x;
	echo "<hr />";
	
?>   



</body>
</html>