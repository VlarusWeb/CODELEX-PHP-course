<?php
declare(strict_types=1);

//*********************************** 02-if,else,elseif,switch.

//*********************************** EXERCISE 1

$integer = 10;

$string = "10";

if ($integer == $string) {
    echo "that's variables is same";
}
else {
    echo "that's variables not same";
}

echo "\n";

//*********************************** EXERCISE 2

$integer50 = 50;

if ($integer50 >1 && $integer50 <100) {
    echo "number is range 1 to 100";
}
else {
    echo "number not in range 1 to 100";
}

echo "\n";

//*********************************** EXERCISE 3

$string = "Hello";

if ($string = "Hello") {
    echo $string . " " . 'World!';
}

echo "\n";

//*********************************** EXERCISE 4

$testItem = 40;

if ($testItem >1 && $testItem <50 && $testItem %2 == 0) {
    echo "number is greater than 1 smaller than 50 and is even";
} else {
    echo "number is odd";
}

echo "\n";

//********************************** EXERCISE 5

$integer = 50;

$rangeStart = 25;

$rangeStop = 75;

if ($integer > $rangeStart && $integer < $rangeStop) {
    echo "CORRECT";
} else {
    echo "INCORRECT";
}

echo "\n";

//********************************** EXERCISES 6

$plateNumber = "KF 6281";

switch ($plate_number) {
    case "BH 4389";
        echo "that not your car";
        break;
    case "TP 7632";
        echo "that's wrong car";
        break;
    case "KF 6281";
        echo "that's your car";
        break;
    default:
        echo "number not identified";
}

echo "\n";

//********************************** EXERCISES 7

$number = 81;

switch ($number){
    case $number < 50;
        echo "low";
        break;
    case $number >50 && $number < 100;
        echo "medium";
        break;
     case $number > 100;
        echo "high";
}
