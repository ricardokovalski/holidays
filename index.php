<?php

require __DIR__ . '/vendor/autoload.php';

use Holidays\Types\Christmas;

$Christmas = new Christmas();

echo $Christmas->getNameHoliday().PHP_EOL;
echo $Christmas->getDateHoliday().PHP_EOL;



