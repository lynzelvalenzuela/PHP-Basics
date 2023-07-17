<!DOCTYPE html>
<html>
<body>

	<?php 
	
		//WHILE LOOP - pretest loop
		$x = 1;
		  
		while($x <= 10) {
		   echo "The number is: $x <br>";
		   $x++;
		} 
		echo "<hr />";


		
		//DO WHILE LOOP - posttest
		$x = 6;		
		do {
		echo "The number is: $x <br>";
		$x++;
		} while ($x <= 5);
		
	?>   

</body>
</html>