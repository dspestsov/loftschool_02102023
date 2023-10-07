<?php

function checkEven($value)
{
    $rest = $value % 2;
    if ($rest === 0) {
        return true;
    }

    return false;
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
