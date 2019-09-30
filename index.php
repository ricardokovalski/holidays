<?php

require __DIR__ . '/vendor/autoload.php';

$Christmas = new \Holidays\Types\Christmas();
$CorpusChristi = new \Holidays\Types\CorpusChrist();

echo $Christmas->getNameHoliday().PHP_EOL;
echo $Christmas->getDateHoliday().PHP_EOL;

echo $CorpusChristi->getNameHoliday().PHP_EOL;
echo $CorpusChristi->getDateHoliday().PHP_EOL;



