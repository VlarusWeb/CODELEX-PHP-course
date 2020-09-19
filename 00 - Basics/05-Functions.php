<?php

declare(strict_types=1);

//********************************************* EXERCISE 1

/**
 * @param $string
 */
function addToEnd($string) {
    echo "{$string} CODELEX";
}

addToEnd("I go to dream with");

echo "\n";

//********************************************* EXERCISE 2

/**
 * @param $num_a
 * @param $num_b
 */
function multiplyNum($num_a, $num_b) {
   echo $num_a * $num_b;
}

multiplyNum(10,5);

echo "\n";

//******************************************** EXERCISE 3

require "classes/person.php";

$person = new Person("Olegs", "Tuleninovs", 45, "23/06/1975");

function determineAge($person) {
    if ($person->age >= 18) {
        echo "{$person->name} {$person->surname} has reached age of 18!\n";
    } else {
        echo "{$person->name} {$person->surname} not reached age of 18!\n";
    }
}

determineAge($person);

echo "\n";

//******************************************** EXERCISE 4

$persons = [
    $person = new Person("Kārlis", "Ulmanis", 59, "05/04/1961"),
    $person = new Person("Valdis", "Zatlers", 64, "12/08/1956"),
    $person = new Person("Raimonds", "Vējonis", 16, "21/03/2004"),
    $person = new Person("Jānis", "Čakste", 43, "29/12/1978"),
    $person = new Person("Andris", "Bērziņš", 51, "15/11/1970")
];

foreach ($persons as $person) {
    determineAge($person);
}

echo "\n";

//******************************************* EXERCISE 5

$fruits = [
    [
        'fruitName' => "Bananas",
        'fruitWeight' => 25
    ],
    [
        'fruitName' => "Pineapples",
        'fruitWeight' => 20
    ],
    [
        'fruitName' => "Kiwi",
        'fruitWeight' => 9
    ],
    [
        'fruitName' => "Lemons",
        'fruitWeight' => 7
    ]
];

$shippingCosts = [
    'overWeight' => '2 EUR',
    'standartWeight' => '1 EUR'
];

function calculateShippCost($fruit, $cost) {
    if ($fruit['fruitWeight'] > 10) {
        echo "The shipping costs for {$fruit['fruitName']} is {$cost['overWeight']}\n";
    } elseif ($fruit['fruitWeight'] < 10) {
        echo "The shipping costs for {$fruit['fruitName']} is {$cost['standartWeight']}\n";
    }
}

foreach ($fruits as $fruit) {
    calculateShippCost($fruit, $shippingCosts);
}

echo "\n";

//******************************************** EXERCISE 6

$mixArray = [22, 9, 81, 3.14, 'CODELEX'];

$itemCount = count($mixArray);

echo "Array have {$itemCount} items.\n";

function sortTypesDoubleIfInteger($item) {
    if (is_int($item) === true) {
        $itemX2 = $item * 2;
        echo "{$item} is integer, multiply by 2 is: {$itemX2}\n";
    } elseif (gettype($item) === 'double') {
        echo "{$item} is float, and don't need multiply!\n";
    } elseif (gettype($item) === 'string' && $item !== 'CODELEX') {
        echo "{$item} is string!";
    } elseif ($item === 'CODELEX') {
        echo "{$item} is the best IT school!";
    }
}
foreach ($mixArray as $item) {
    sortTypesDoubleIfInteger($item);
}

echo "\n";

//******************************************** EXERCISE 7

require "classes/PersonRequester.php";

require "classes/Gun.php";

$requester = new PersonRequester("Janis Čakste", ['A', 'B'],1250);

$guns = [
    'Pistol "Berreta 92F"' => new Gun("Berreta 92F", 250.60, "A"),
    'Carbine M4' => new Gun("Carbine M4", 1250.90, "B"),
    'Rifle "Barret M107' => new Gun("Barret M107 rifle", 2100, "C")
];

foreach ($guns as $gun) {
    if (in_array($gun->getLicense(), $requester->getLicense()) && $requester->getCash() >= $gun->getPrice()) {
        echo "The {$gun->getGunName()} allowed,and can be purchased by {$requester->getName()}\n";
    } elseif (! in_array($gun->getLicense(), $requester->getLicense())) {
        echo "{$requester->getName()} doesn't have a license {$gun->getLicense()} to purchase {$gun->getGunName()}\n";
    } elseif ($gun->getPrice() > $requester->getCash()) {
        echo "{$requester->getName()} dont have enough money,$ {$gun->getPrice()} to purchase {$gun->getGunName()}\n";
    }
}

