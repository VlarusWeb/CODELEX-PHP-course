<?php declare(strict_types=1);


function factorial($lowerBound, $upperBound)
{
    $multiplication = 1;

    for ($i = $lowerBound; $i <= $upperBound; $i++) {
        $multiplication *= $i;
    }

    return "Factorial  {$lowerBound} and {$upperBound} = {$multiplication}\n";
}
// TEST
echo factorial(1, 10);


// SECOND VARIANT

function factorialN(int $number) {
    $factorialN = 1;
    for ($i = $number; $i >= 1; $i--) {
        $factorialN = $factorialN * $i;
    }
    return "Factorial for{$number} = {$factorialN}";
}
// TEST
echo factorialN(10);