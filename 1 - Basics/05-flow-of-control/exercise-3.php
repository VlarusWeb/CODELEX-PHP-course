<?php

echo 'Enter positive number:';
$number = readline();

// Variant 1
$symbols = strlen($number);
echo "The number contains {$symbols} digits.\n";

// Variant 2 with input check
echo "\n Output with check:";
switch ($number) {
    case ($number < 0);
        echo "{$number} not positive number!";
        break;
    case ((preg_match('/[-][a-zA-Z]/', $number)));
        echo ("Input contain non digits symbol!");
        break;
    case ($number !== '');
        echo "The number contains {$symbols} digits.";
}
