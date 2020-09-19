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

$number_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

for ($i = 0; $i < count($number_array); $i++) {
    echo $number_array[$i] . ",";
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

$int_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

foreach ($int_array as $integer) {
    if ($integer %3 == 0) {
        echo $integer . ",";
    }
}

echo "\n";

//********************************************** EXERCISE 5

$multiple_person = [
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

foreach ($multiple_person as $person_dates) {
    echo "{$person_dates['name']} {$person_dates['surname']} age:{$person_dates['age']} date of birth:{$person_dates['birthday']}\n";
}
