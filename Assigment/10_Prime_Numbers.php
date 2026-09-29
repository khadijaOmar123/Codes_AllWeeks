<?php
// 10. Prime numbers from 10 to 50, inclusive.
echo "<h2>10. Prime numbers from 10 to 50</h2>";
for ($number = 10; $number <= 50; $number++) {
    $isPrime = true;
    for ($divisor = 2; $divisor * $divisor <= $number; $divisor++) {
        if ($number % $divisor == 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime) { echo "$number "; }
}
