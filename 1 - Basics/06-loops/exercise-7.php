<?php

class RollTwoDice
{
    public $desiredNun;
    public $rolledDice1;
    public $rolledDice2;
    public $sumOfDices;

    public function rollDesiredNum()
    {
        $this->desiredNun = readline("Desire number from 2 to 12 :\n");
        echo "You desire {$this->desiredNun}\n";

        while ($this->desiredNun != ($this->rolledDice1 + $this->rolledDice2)) {
            $this->rolledDice1 = rand(1, 6);
            $this->rolledDice2 = rand(1, 6);
            $this->sumOfDices = ($this->rolledDice1 + $this->rolledDice2);
            echo "{$this->rolledDice1} + {$this->rolledDice2} = {$this->sumOfDices}\n";
        }
    }
}

$rollTwoDice = new RollTwoDice();

$rollTwoDice->rollDesiredNum();