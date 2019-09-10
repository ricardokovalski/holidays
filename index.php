<?php

require_once 'src/Holiday.php';

$holiday = new Holiday();
$collection = $holiday->getCollectionHolidays();

echo "<pre>";
var_dump($collection);
