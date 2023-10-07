<?php

$bmw = [
    'model' => 'x5',
    'speed' => 120,
    'doors' => 5,
    'year' => '2015'
];

$toyota = [
    'model' => 'camry',
    'speed' => 130,
    'doors' => 4,
    'year' => '2016'
];

$opel = [
    'model' => 'astra',
    'speed' => 100,
    'doors' => 3,
    'year' => '2010'
];

$cars = [
    'bmw' => $bmw,
    'toyota' => $toyota,
    'opel' => $opel
];

foreach ($cars as $carName => $carProperties) {
    echo "Car $carName<br>";
    foreach ($carProperties as $property) {
        echo "$property ";
    }
    echo "<br>";
}