<?php

require __DIR__ . '/vendor/autoload.php';

//$allHolidaysCollection = new \Holidays\Collections\AllHolidays();
$nationalHolidaysCollection = new \Holidays\Collections\NotNationalHolidays();

echo "<pre>";
//var_dump($allHolidaysCollection->orderByAsc()->getCollection());
echo "123\n\n";
var_dump($nationalHolidaysCollection->orderByDate()->ascending()->getCollection());