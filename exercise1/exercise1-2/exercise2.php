<?php

const FELT_TIP_PEN_DRAWINGS = 23;
const PENCIL_DRAWINGS = 40;
const ALL_DRAWINGS = 80;

echo "Дано:<br>";
echo "Рисунки фломастерами: " . FELT_TIP_PEN_DRAWINGS . "<br>";
echo "Рисунки карандашами: " . PENCIL_DRAWINGS . "<br>";
echo "Всего рисунков: " . ALL_DRAWINGS . "<br>";
echo "Решение:<br>";
$paintDrawings = ALL_DRAWINGS - FELT_TIP_PEN_DRAWINGS - PENCIL_DRAWINGS;
echo ALL_DRAWINGS . " - " . FELT_TIP_PEN_DRAWINGS . " - " . PENCIL_DRAWINGS . " = $paintDrawings<br>";
