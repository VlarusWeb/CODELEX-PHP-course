<?php declare(strict_types=1);

function printItemsFromArray(array $array) {
    for ($i = 0; $i < count($array); $i++) {
        echo "{$array[$i]}\n";
    }
}


