<?php

//require_once 'app/Taste/Salt.php';
//require_once 'app/Taste/Sweet.php';

foreach (glob('app/Taste/*.php') as $fileName)
{
    require_once "$fileName";
}

use App\Sweet, App\Salt;



$candy = new Sweet("candy",true);

$chips = new Salt("chips",true);
