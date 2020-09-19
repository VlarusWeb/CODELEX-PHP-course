<?php

// if we wont know number exponentiation

$number = readline('Input number of terms: ');
$n = readline('Enter exponentiation value: ');

$result = $number;
for ($i = 2; $i <=$n; $i++) {
    $result = ($result * $number);
    echo "{$number}  exponentiation {$i}  = {$result}\n";
}

echo "\n";
//  if we need 'i' in 'i'  exponentiation

$result1 = $number;
for ($i = 1; $i < $number;$i++) {
    $result1 *= $number;
}
echo "{$number}  exponentiation {$number} = {$result1}\n";