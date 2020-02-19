<?php

namespace Holidays\Collections;

use Holidays\Contract\Collection as HolidayCollection;

class NationalHolidays extends AllHolidays implements HolidayCollection
{
    public function __construct()
    {
        parent::__construct();
        $this->make();
    }

    private function make()
    {
        $holidays = array_filter($this->getCollection(), function ($object) {
            return $object->isNational();
        });

        $this->collection = array_values($holidays);
    }
}