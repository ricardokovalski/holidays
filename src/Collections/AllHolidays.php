<?php

namespace Holidays\Collections;

use Holidays\Contract\Holiday;

class AllHolidays
{
    protected $collection = [];

    public function __construct()
    {

    }

    public function addHoliday(Holiday $holiday)
    {
        array_push($this->collection, $holiday);
        return $this;
    }

    public function getCollection()
    {
        return $this->collection;
    }

}