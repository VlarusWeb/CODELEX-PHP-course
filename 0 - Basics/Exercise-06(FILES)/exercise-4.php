<?php declare(strict_types=1);

$file = fopen('name.txt','r');
$information = explode(',',fread($file, filesize('name.txt')));
fclose($file);


$person = new stdClass();
$person->name = $information[0];
$person->surname = $information[1];
$person->age = $information[2];

echo "{$person->name}, {$person->surname}, {$person->age}";