<?php
// 7. HCF using the Euclidean algorithm.
echo "<h2>7. Highest common factor (HCF)</h2>";
$a = 18;
$b = 24;
$x = $a < 0 ? -$a : $a;
$y = $b < 0 ? -$b : $b;
if ($x == 0 && $y == 0) {
    echo "HCF of 0 and 0 is undefined.";
} else {
    while ($y != 0) {
        $remainder = $x % $y;
        $x = $y;
        $y = $remainder;
    }
    echo "HCF of $a and $b = $x";
}

