<?php

declare(strict_types=1);

//*********************************************** 04-LOOPS

//*********************************************** EXERCISE 1

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($array as $items) {
    echo "$items\n";
}

echo "\n";

//********************************************** EXERCISE 2

$numberArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

for ($i = 0; $i < count($numberArray); $i++) {
    echo $numberArray[$i] . ",";
}

echo "\n";

//********************************************** EXERCISE 3

$x = 1;

while ($x <=10) {
    print "CODELEX\n";
    $x++;
}

echo "\n";

//********************************************** EXERCISE 4

$intArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

foreach ($intArray as $integer) {
    if ($integer %3 == 0) {
        echo $integer . ",";
    }
}

echo "\n";

//********************************************** EXERCISE 5

$multiplePerson = [
    'markiz' => [
        'name' => 'Markiz',
        'surname' => 'Melnikovs',
        'age' => 8,
        'birthday' => '01/09/2012'
    ],
    'lena' => [
        'name' => 'Elena',
        'surname' => 'Kulikova',
        'age' => 29,
        'birthday' => '11/12/1991'
    ],
    'modris' => [
        'name' => 'Modris',
        'surname' => 'Aboliņš',
        'age' => 50,
        'birthday' => '02/07/1970'
    ],
    'larisa' => [
    'name' => 'Larisa',
    'surname' => 'Ivanova',
    'age' => 69,
    'birthday' => '03/04/1951'
    ]
];

foreach ($multiplePerson as $personDates) {
    echo "{$personDates['name']} {$personDates['surname']} age:{$personDates['age']} date of birth:{$personDates['birthday']}\n";
}
