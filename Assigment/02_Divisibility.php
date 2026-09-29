<?php
// 2. Check divisibility by 3, 5, both, or neither.
echo "<h2>2. Divisibility by 3 and 5</h2>";
$number = 30;
if ($number % 3 == 0 && $number % 5 == 0) {
    echo "$number is divisible by both 3 and 5.";
} elseif ($number % 3 == 0) {
    echo "$number is divisible by 3 only.";
} elseif ($number % 5 == 0) {
    echo "$number is divisible by 5 only.";
} else {
    echo "$number is divisible by neither 3 nor 5.";
}

