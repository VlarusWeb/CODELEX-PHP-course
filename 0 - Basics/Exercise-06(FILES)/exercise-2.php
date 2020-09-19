<?php declare(strict_types=1);

require "functions/functions.php";

$name = readline("Enter your name:");
$greetings = 'Hello ';

sayHello($name, $greetings);

$age = readline("Enter your age:");

checkAgeForProgramming((int)$age);
