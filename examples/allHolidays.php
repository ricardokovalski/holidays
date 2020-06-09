<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require __DIR__ . '/vendor/autoload.php';

/*$allHolidaysCollection = (new \Holidays\Collections\AllHolidays())->orderByDate()->ascending()->getCollection();
echo "<pre>";
var_dump($allHolidaysCollection);
die("AQUI<----");*/

$nationalHolidaysCollection = (new \Holidays\Collections\NationalHolidays())->orderByDate()->ascending()->getCollection();

echo "<pre>";
//var_dump($allHolidaysCollection->orderByAsc()->getCollection());
echo "\n\n";
var_dump($nationalHolidaysCollection);