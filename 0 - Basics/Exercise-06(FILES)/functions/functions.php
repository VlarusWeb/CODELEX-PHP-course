<?php

function sayHello($name, $greeting) {
    echo "{$greeting} {$name}!";
}


function getRectangleArea($width, $height) {
    return $width * $height;
}

function checkAgeForProgramming(int $age)
{
    if ($age <= 20) {
        echo "You in {$age}, you are young can be a programmer!";
    } elseif ($age > 20 && $age <= 35) {
        echo "You in {$age}, you can be a programmer!";
    } elseif ($age > 35) {
        echo "You in {$age}, if it is a dream, try , you steel can be a programmer!";
    }
}