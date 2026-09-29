<?php
// 9. A prime integer is greater than 1 and has only two positive factors.
echo "<h2>9. Prime or non-prime</h2>";
$number = 29;
$isPrime = $number >= 2;
for ($divisor = 2; $divisor * $divisor <= $number; $divisor++) {
    if ($number % $divisor == 0) {
        $isPrime = false;
        break;
    }
}
echo $isPrime ? "$number is prime." : "$number is non-prime.";

