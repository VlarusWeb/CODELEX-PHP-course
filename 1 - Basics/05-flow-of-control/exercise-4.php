<?php

echo'Enter number (0-6)';
$dayNumber = readline();

// Variant 1 - if
echo 'Variant with (if) output:       ';

if ($dayNumber == 0) {
    echo 'Sunday';
} elseif ($dayNumber == 1) {
    echo 'Monday';
} elseif ($dayNumber == 2) {
    echo 'Tuesday';
} elseif ($dayNumber == 3) {
    echo 'Wednesday';
} elseif ($dayNumber == 4) {
    echo 'Thursday';
} elseif ($dayNumber == 5) {
    echo 'Friday';
} elseif ($dayNumber == 6) {
    echo 'Saturday';
} else {
    echo 'Not a valid day';
}

echo "\n";

// Variant 2 - switch
echo 'Variant with (switch) output:   ';

switch ($dayNumber) {
    case 1;
        echo 'Monday';
        break;
    case 2;
        echo 'Tuesday';
        break;
    case 3;
        echo 'Wednesday';
        break;
    case 4;
        echo 'Thursday';
        break;
    case 5;
        echo 'Friday';
        break;
    case 6;
        echo 'Saturday';
        break;
    case 0;
        echo 'Sunday';
        break;
    default:
        echo 'Not a valid day!';

}