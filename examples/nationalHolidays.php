<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require __DIR__ . '../vendor/autoload.php';

use Holidays\Collections\NationalHolidays;

$collection = new NationalHolidays();
$collection->orderByDate()
    ->ascending()
    ->getCollection();