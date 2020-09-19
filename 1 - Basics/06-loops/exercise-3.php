<?php

echo "Enter first word: ";
$firstWord = readline();

echo "Enter second word: ";
$secondWord = readline();

$strLength = 30;

function getSumOfWordSymbol(string $str1, string $str2): int {
    return strlen($str1) + strlen($str2);
}

$dotsNumber = $strLength - getSumOfWordSymbol($firstWord, $secondWord);

// VARIANT - 1

echo "\n$firstWord";
for ($i = 1; $i <= $dotsNumber; $i++) {
    echo '.';
}
echo "$secondWord\n";
echo "\n";

// VARIANT 2

$fullString = '..............................';
$finalDotSum = mb_substr($fullString,0,$dotsNumber);

echo "{$firstWord}{$finalDotSum}{$secondWord}\n";


