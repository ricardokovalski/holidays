<?php

require __DIR__ . '/vendor/autoload.php';

use Holidays\Christmas;

$Christmas = new Christmas();
$test = $Christmas->getNameHoliday();
echo $test;




