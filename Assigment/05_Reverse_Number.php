<?php
// 5. Reverse an integer using arithmetic, without strrev().
echo "<h2>5. Reverse a number</h2>";
$number = 12345;
$remaining = $number < 0 ? -$number : $number;
$reverse = 0;
while ($remaining > 0) {
    $digit = $remaining % 10;
    $reverse = $reverse * 10 + $digit;
    $remaining = (int) ($remaining / 10);
}
if ($number < 0) { $reverse = -$reverse; }
echo "Reverse of $number = $reverse";

