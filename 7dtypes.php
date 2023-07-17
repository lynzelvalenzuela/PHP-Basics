<!DOCTYPE html>
<html>
<body>

<?php 

	// STRING - sequence of character
	$x = "Hello world!"; // double cout
	$y = 'Hi world!';// single cout
	echo $x;
	var_dump($x);
	echo "<br>";
	echo $y;
	var_dump($y);
	echo "<hr />";

	// INTEGER - atleast 1 digit, dont have decimal, can be + or - can be in 3 formats
	 $num = 6000;// do not required cout
	var_dump($num); //Dump information about different variables:
	echo "<hr />";
	
	// FLOAT with exponent or decimal
	$num2 = 20.565;
	var_dump($num2);
	echo "<hr />";

	// ARRAY can store multiple value
	$sports = array("Soccer","Tennis","Baseball","Football");
	var_dump($sports);
	echo "<hr />";

	// NULL
	$color = "Blue";
	$color = NULL;
	var_dump($color);
	
	echo "<hr />";
	// BOOLEAN
	$x = true;
	$y = false;
	var_dump($x);
	var_dump($y);

?>

</body>
</html>