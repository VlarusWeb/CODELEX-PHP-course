<?php declare(strict_types=1);


function checkOddEven($number)
{
    if ($number % 2 === 0) {
        echo "{$number} is even number. \n";
    } else {
        echo "{$number} is odd number. \n";
    }
    return "Bye!\n";
}

// TEST
for ($i = 1; $i < 10; $i++) {
    $number = rand(1, 100);
    echo checkOddEven($number);
}