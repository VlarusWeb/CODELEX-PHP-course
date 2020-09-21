<?php

namespace App;

require 'Taste.php';

use TasteApp\Taste;

class Sweet extends Taste
{
    public function setName(string $name): void
    {
        parent::setName($name);
    }
}

