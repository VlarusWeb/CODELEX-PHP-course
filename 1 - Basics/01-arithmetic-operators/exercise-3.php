<?php declare(strict_types=1);


function sumLowToUpp($lowerBound, $upperBound)
{
    $sum = 0;
    for ($i = $lowerBound; $i <= $upperBound; $i++) {
        $sum += $i;
    }
    $average = $sum / ($upperBound - $lowerBound + 1);

    return "Sum of $lowerBound to $upperBound is $sum.\n" . "Average is $average.\n";
}

// TEST
echo sumLowToUpp(1, 100);