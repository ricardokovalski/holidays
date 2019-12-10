<?php

require __DIR__ . '/vendor/autoload.php';

$collection = new \Holidays\Collections\AllHolidays();

echo "<pre>";
var_dump($collection->orderByAsc()->getCollection());