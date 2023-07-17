<!DOCTYPE html>
<html>
<body>

<?php 

//FOR LOOP
for ($x = 1; $x <= 10; $x++) {
   echo "$x <br>";
}

echo "<hr />";



//FOR EACH LOOP
$cars = array("tesla", "bmw", "honda", "ford"); 

foreach ($cars as $value) {
   echo "$value <br>";
}

?>   

</body>
</html>