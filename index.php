<?php

require __DIR__ . '/vendor/autoload.php';

$Christmas = new \Holidays\Types\Christmas();
$CorpusChristi = new \Holidays\Types\CorpusChrist();
$Independence = new \Holidays\Types\IndependenceBrazil();

echo $Christmas->getNameHoliday() . PHP_EOL;
echo $Christmas->getDateHoliday() . PHP_EOL;

echo $CorpusChristi->getNameHoliday() . PHP_EOL;
echo $CorpusChristi->getDateHoliday() . PHP_EOL;

echo $Independence->getNameHoliday() . PHP_EOL;
echo $Independence->getDateHoliday() . PHP_EOL;




