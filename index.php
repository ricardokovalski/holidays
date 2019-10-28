<?php

require __DIR__ . '/vendor/autoload.php';

$collection = new \Holidays\Collections\AllHolidays();

$Christmas = new \Holidays\Types\Christmas();
$CorpusChristi = new \Holidays\Types\CorpusChrist();
$Independence = new \Holidays\Types\IndependenceBrazil();

$collection->addHoliday($CorpusChristi)
    ->addHoliday($Christmas)
    ->addHoliday($Independence);

echo "<pre>";
var_dump($collection->getCollection());