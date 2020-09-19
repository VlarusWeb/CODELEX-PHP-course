<?php declare(strict_types=1);

$numbers = [20, 30, 25, 35, -16, 60, -100];

$sum = 0;
foreach ($numbers as $number) {
    $sum += $number;
}
$average = $sum / count($numbers);

echo "current sum: {$sum} \n average: {$average}\n";
