<!DOCTYPE html>
<html>
<body>

<?php
//BASIC OUTPUT USING ECHO
echo "<h1>Basic output Echo</h1>";
echo "Sample Paragraph 1. <br>";
//Echo allows multiple parameters - Print Does not
echo "This " ,"string ", "has ", "multiple parameters ";
echo "<hr />";

//OUTPUT VARIABLES ECHO
$txt1 = "echo variable";
$txt2 = "Programming";
$x = 20;
$y = 30;

echo "<h2> $txt1 </h2>";
echo "I like  $txt2 <br>";
echo $x + $y;

//BASIC OUTPUT USING PRINT
print "<h1>output print</h1>";
print "Sample Paragraph 1. <br>";
print "<hr />";

//OUTPUT VARIABLES PRINT
$txt1 = "var print";
$txt2 = "PHP Programming";
$x = 200;
$y = 300;

print "<h2> $txt1 </h2>";
print "I like  $txt2 <br>";
print $x + $y;




?>  

</body>
</html>