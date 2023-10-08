<?php

function checkEven($value)
{
    return $value % 2 === 0;
}

$square = 10;
echo "<table>";

for ($row = 1; $row <= $square; $row++) {
    echo "<tr>";
    for($column = 1; $column <= $square; $column++) {
        echo "<td>";
        echo (checkEven($row) && checkEven($column)) ? '(' : '[';
        $result = $column * $row;
        echo "$column x $row = $result";
        echo (checkEven($row) && checkEven($column)) ? ')' : ']';
        echo "</td>";
    }
    echo "</tr>";
}

echo "</table>";
