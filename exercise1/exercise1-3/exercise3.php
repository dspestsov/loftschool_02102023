<?php

$age = rand(0, 70);

echo "Возраст: $age<br>";

if ($age >= 18 && $age <= 65) {
    echo "Вам еще работать и работать<br>";
} elseif ($age > 65) {
    echo "Вам пора на пенсию<br>";
} elseif ($age >= 1 && $age <= 17) {
    echo "Вам еще рано работать<br>";
} else {
    echo "Неизвестный возраст<br>";
}

unset($age);