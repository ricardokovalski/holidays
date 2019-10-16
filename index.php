<?php

require __DIR__ . '/vendor/autoload.php';

$Christmas = new \Holidays\Types\Christmas();
$CorpusChristi = new \Holidays\Types\CorpusChrist();
$Independence = new \Holidays\Types\IndependenceBrazil();

echo $Christmas->getName() . PHP_EOL;
echo $Christmas->getDate() . PHP_EOL;
//echo $Christmas->isHolidayNational() . PHP_EOL;

/*echo $CorpusChristi->getName() . PHP_EOL;
echo $CorpusChristi->getDate() . PHP_EOL;
echo $CorpusChristi->isHolidayNational() . PHP_EOL;*/

echo $Independence->getName() . PHP_EOL;
echo $Independence->getDate() . PHP_EOL;
//echo $Independence->isHolidayNational() . PHP_EOL;

//echo "<pre>";
//var_dump($CorpusChristi->getName());




