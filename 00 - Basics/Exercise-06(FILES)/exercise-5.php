<?php declare(strict_types=1);

$iD = readline("Enter ID: ");
$iDexist = false;

$file = fopen("personList.csv", "r");

while (($info = fgetcsv($file, 0, ",")) !== false)
{
    if ($info[0] === $iD) {
        echo "ID={$info[0]}.  {$info[1]} {$info[2]}, age {$info[3]}\n";
        $iDexist = true;
    }
}

fclose($file);

if (! $iDexist) {
    echo "In file not exist information with ID $iD.\n";
}
