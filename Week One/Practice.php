<?php

$name = "Khadija Mohamed Omar";
$age = 20;

echo "My name is $name";
echo "<br>";
echo "My age is $age <br>";

// String Functions
$message = "Good Morning";

echo "The character at position 5 is: " . $message[5] . "<br>";

$position = strpos($message, "M");
echo "The position of the letter M is: " . $position . "<br>";

$count = strlen($message);
echo "This message \"$message\" contains $count characters <br>";

$message = "The quick brown fox jumps over the lazy dog";
$word_count = str_word_count($message);

echo "This message contains $word_count words <br>";

$message = "Good Morning";
echo str_replace("Morning", "Night", $message);

echo "<br>";

echo "Good" . " Morning";

echo "<br>";

// Calculate Area of Circle
define("PI", 3.14);

$radius = 6;
$area = PI * ($radius * $radius);

echo "The area of circle is: " . $area;

echo "<br>";

$num = 12345 * 67890;

echo $num;
echo "<br>";

echo substr((string)$num, 3, 1);


// Arithmetic Operators
echo "<h5>Arithmetic Operators</h5>";

$x = 5;
$y = 4;

$result = $x + $y;
echo "The sum of $x and $y = " . $result;

echo "<br>";

$result = $x - $y;
echo "The difference of $x and $y = " . $result;

echo "<br>";

$result = $x * $y;
echo "The product of $x and $y = " . $result;

echo "<br>";

$result = $x / $y;
echo "The division of $x and $y = " . $result;

echo "<br>";

$result = $x % $y;
echo "The modulus of $x and $y = " . $result;


// Operator Precedence
echo "<br>";

$result = 1 + 5 * 3 - 1 * (4 / 3);
echo "The result is " . $result;

echo "<br>";

$result = 1 + 5 * 3 - 1 * (6 / 3) > 10 || 
          4 / 2 == 2 && !false;

echo "The result is " . ($result ? "True" : "False");


// Concatenation Operator
echo "<h5>Concatenation Operators</h5>";

$a = "Welcome ";
$b = "PHP & ";
$c = "MySQL";

echo $a . $b . $c . "<br>";

$greeting = "Hello, ";
$message = "It's nice to meet you!";

echo $greeting . $message;


// Increment / Decrement Operators
echo "<h5>Increment / Decrement Operators</h5>";

$x = 5;

echo ++$x . " First increments then prints <br>";
echo $x . "<br>";

$x = 5;

echo $x++ . " First prints then increments <br>";
echo $x . "<br>";

$x = 5;

echo --$x . " First decrements then prints <br>";
echo $x . "<br>";

$x = 5;

echo $x-- . " First prints then decrements <br>";
echo $x . "<br>";


// Arithmetic Assignment Operators
echo "<h5>Arithmetic Assignment Operators</h5>";

$x = 78;

echo "x + 1 value is: " . ($x += 1) . "<br>";
echo "x - 1 value is: " . ($x -= 1) . "<br>";
echo "x / 1 value is: " . ($x /= 1) . "<br>";
echo "x * 1 value is: " . ($x *= 1) . "<br>";
echo "x % 1 value is: " . ($x %= 1) . "<br>";


// Comparison Operators
echo "<h5>Comparison Operators</h5>";

$x = 5;
$y = 4;

echo "Check whether X and Y are equal: " . 
     ($x == $y ? "True" : "False") . "<br>";

echo "Check whether X and Y are not equal: " . 
     ($x != $y ? "True" : "False") . "<br>";

?>