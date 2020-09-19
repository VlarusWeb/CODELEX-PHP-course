<?php declare(strict_types=1);

function check15(int $num1, int $num2) {
    if ($num1 == 15 || $num2 == 15 || $num1 + $num2 == 15
        || $num1 - $num2 == 15 || $num2 - $num1 == 15 ) {
        return 'true';
    } else {
        return 'false';
    }
}
// TEST
for ($i = 1; $i < 20 ;$i++) {
        $num1 = rand(1, 15);
        $num2 = rand(1, 15);
    echo "{$num1} and {$num2}  = ", check15($num1, $num2) ."\n";
}

