<!DOCTYPE html>
<html>
<body>

<?php

//WORD COUNT
echo str_word_count("Hello world BSIS 3B!");
echo "<hr />";

//REVERSE WORDS
echo strrev("Hello world!"); // outputs !dlrow olleH
echo "<hr />";

//SEARCH FOR TEXT INSIDE A STRING
echo strpos("HELLO world!","world"); // outputs 6
echo "<hr />";

//REPLACE TEXT INSIDE A STRING
echo str_replace("Hello", "welcome", "Hello world BSIS 3B !"); // outputs Hello John!
echo "<hr />";

?>  
  
</body>
</html>