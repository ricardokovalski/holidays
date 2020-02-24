<?php

namespace Holidays\Collections;

use Holidays\Contract\Holiday;

class NationalHolidays extends AllHolidays
{
    public function __construct()
    {
        parent::__construct();
        $this->make();
    }

    private function make()
    {
        $holidays = array_filter($this->getCollection(), function (Holiday $holiday) {
            return $holiday->getType() == \Holidays\Domain\TypeHoliday::NATIONAL_HOLIDAY;
        });

        $this->collection = array_values($holidays);
    }
}