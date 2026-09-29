<?php
// 3. Odd numbers ascending; even numbers descending.
echo "<h2>3. Odd and even numbers</h2>";
echo "Odd numbers from 2 to 20:<br>";
for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) { echo "$i "; }
}
echo "<br>Even numbers from 35 to 7:<br>";
for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) { echo "$i "; }
}

