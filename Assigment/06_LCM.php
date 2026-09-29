<?php
// 6. LCM of two positive integers: check multiples of the larger one.
echo "<h2>6. Least common multiple (LCM)</h2>";
$a = 8;
$b = 12;
if ($a <= 0 || $b <= 0) {
    echo "Please use two positive integers.";
} else {
    $step = $a > $b ? $a : $b;
    $lcm = $step;
    while ($lcm % $a != 0 || $lcm % $b != 0) {
        $lcm += $step;
    }
    echo "LCM of $a and $b = $lcm";
}

