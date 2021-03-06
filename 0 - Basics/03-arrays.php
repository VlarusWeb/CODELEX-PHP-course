<?php


//****************************************** 03-ARRAY & OBJECT

//****************************************** EXERCISE 1

$numberArr = [ 2, 3, 4];

echo array_sum($numberArr);

echo "\n";

//****************************************** EXERCISE 2

$person = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];

var_dump($person);

echo "\n";

//****************************************** EXERCISE 3

$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 50;

var_dump($person->name,$person->surname,$person->age);

echo "\n";

//****************************************** EXERCISE 4

$persons = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

echo $persons[0][1]['name'] . ' ' . $persons[0][1]['surname'] . ' ' . $persons[0][1]['age'];

echo "\n";

//****************************************** EXERCISE 5

echo $persons[0][0]['name'] . ' & ' . $persons[0][1]['name'] . ' ' . $persons[0][1]['surname'] . "'s";
