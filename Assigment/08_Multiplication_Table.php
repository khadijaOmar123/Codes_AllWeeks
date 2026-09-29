<style>table{border-collapse:collapse}td{border:1px solid gray;padding:3px;text-align:center}</style>
<?php
// 8. Multiplication table using nested loops.
echo "<h2>8. Multiplication table</h2>";
echo "<table><caption>Multiplication Table</caption>";
for ($row = 1; $row <= 12; $row++) {
    echo "<tr>";
    for ($column = 1; $column <= 12; $column++) {
        echo "<td>" . ($row * $column) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

