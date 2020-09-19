<?php declare(strict_types=1);

$numbers = [];

for ($i = 0; $i <= 10; $i++) {
    $numbers[$i] = rand(1, 100);
}

$arrayCopy = $numbers;

$numbers[count($numbers) - 1] = -7;

echo "First array:  ";
foreach ($numbers as $number) {
    echo "{$number}" . ",";
}
echo "\nSecond array: ";
foreach ($arrayCopy as $number) {
    echo "{$number}" . ",";
}
