<?php

require __DIR__ . '/vendor/autoload.php';

$Christmas = new \Holidays\Types\Christmas();
$CorpusChristi = new \Holidays\Types\CorpusChrist();
$Independence = new \Holidays\Types\IndependenceBrazil();

echo $Christmas->getName() . PHP_EOL;
echo $Christmas->getDate() . PHP_EOL;
echo $Christmas->isNational() . PHP_EOL;

echo $CorpusChristi->getName() . PHP_EOL;
echo $CorpusChristi->getDate() . PHP_EOL;
echo $CorpusChristi->isNational() . PHP_EOL;

echo $Independence->getName() . PHP_EOL;
echo $Independence->getDate() . PHP_EOL;
echo $Independence->isNational() . PHP_EOL;

echo "<pre>";
var_dump($CorpusChristi);
echo "<pre>";
var_dump($Christmas);
echo "<pre>";
var_dump($Independence);

/*$collection = array();
array_push($collection, $Christmas);
array_push($collection, $CorpusChristi);
array_push($collection, $Independence);

echo "<pre>";
var_dump($collection);


foreach ($collection as $holiday) {
    echo $holiday->getName() . PHP_EOL;
}*/


