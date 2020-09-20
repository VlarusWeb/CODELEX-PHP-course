<?php

echo 'Enter the first number: ';
$firstNumber = readline();

echo 'Enter the second number: ';
$secondNumber = readline();

echo 'Enter the third number: ';
$thirdNumber = readline();

$max = max($firstNumber, $secondNumber, $thirdNumber);

echo "The biggest number is: {$max}";
