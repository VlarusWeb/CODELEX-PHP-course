<?php

class FizBuzz
{
    public $maxNumber;

    public function __construct($maxNumber)
    {
        $this->maxNumber = $maxNumber;
    }
    public function printNum()
    {
        for ($i = 1; $i <= $this->maxNumber; $i++) {
            if ($i % 3 == 0) {
                echo 'Fizz' . ' ';
            } elseif ($i % 5 == 0) {
                echo 'Buzz' . ' ';
            } elseif ($i % 3 == 0 && $i % 5 ==0) {
                echo 'FizzBuzz' . ' ';
            } else {
                echo "{$i}" . ' ';
            }
            if ($i % 20 == 0) {
                echo "\n";
            }
        }
    }
}

$fizzBuzz = new FizBuzz(readline('Enter maximal number (from 1 to 100):'));

echo "{$fizzBuzz->printNum()}\n";
