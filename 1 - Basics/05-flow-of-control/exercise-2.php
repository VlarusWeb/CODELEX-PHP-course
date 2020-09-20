<?php

echo 'Enter the number:';
$number = readline();

if (preg_match('/[-]/', $number)) {
    echo 'Number is negative!';
} else {
    echo 'Number is positive';
}
