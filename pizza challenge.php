<?php


// This is Ben B's code. I have no idea what he is trying to do.

$options = getopt('4:3:2:1:');

$totalSlices = $neededSlices = 0;
foreach ($options as $canEat => $num) {
    $totalSlices = $neededSlices += $canEat * $num;
}

$largePizzas = floor($neededSlices / 8);
$neededSlices = $neededSlices % 8;

$medPizzas = floor($neededSlices / 6);
$neededSlices = $neededSlices % 6;

$smallPizzas = floor($neededSlices / 4);
$neededSlices = $neededSlices % 4;

$waste = 0;

if ($neededSlices != 0) {
    $smallPizzas++;
    $waste = 4 - $neededSlices;
}
echo "Total slices: $totalSlices\n\n";
echo "Large Pizzas: $largePizzas\n";
echo "Medium Pizzas: $medPizzas\n";
echo "Small Pizzas: $smallPizzas\n";
echo "\nWasted Slices: $waste\n";
?>