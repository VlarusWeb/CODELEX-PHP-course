<?php


class PigLet
{
    public $points = 0;
    public $rolled;
    public $answer;

    public function roll()
    {
        echo "Roll the dice ? y-yes or n-no\n";
        $this->answer = readline();
        while ($this->rolled != 1 && $this->answer != 'n') {
            $this->rolled = rand(1, 6);
            if ($this->rolled != 1) {
                $this->points += $this->rolled;
                echo "You rolled a {$this->rolled}\n";
                echo "Your current point {$this->points}\n";
                $this->answer = readline('Roll again ? y-yes or n-no  :');
            }
        }
        if ($this->rolled == 1) {
            $this->points = 0;
            echo "You rolled {$this->rolled}\n";
            echo "You earn {$this->points} points !\n";
            echo 'Game over' . "\n";
        } elseif ($this->answer == 'n') {
            echo "You end game with {$this->points} points!";
        }
    }
}

echo 'Welcome to Piglet game' . "\n";
$pigLet = new PigLet();

$pigLet->roll();
