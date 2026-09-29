<?php
// 4. Numbers divisible by both 2 and 5, descending.
echo "<h2>4. Divisible by both 2 and 5 from 50 to 2</h2>";
for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) { echo "$i "; }
}

