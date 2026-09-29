<?php
// 1. Greatest and smallest without min() or max().
echo "<h2>1. Greatest and smallest</h2>";
$a = 15;
$b = 8;
$c = 24;
$greatest = $a;
$smallest = $a;
if ($b > $greatest) { $greatest = $b; }
if ($c > $greatest) { $greatest = $c; }
if ($b < $smallest) { $smallest = $b; }
if ($c < $smallest) { $smallest = $c; }
echo "Numbers: $a, $b, $c<br>Greatest: $greatest<br>Smallest: $smallest";
