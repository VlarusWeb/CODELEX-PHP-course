<?php declare(strict_types=1);

namespace App;

require 'Taste.php';

use TasteApp\Taste;

class Salt extends Taste
{
    public function setName(string $name): void
    {
        parent::setName($name);
    }
}



