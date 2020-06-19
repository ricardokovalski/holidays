<?php

namespace Holidays\Collections;

use Holidays\Contract\Holiday;
use Holidays\Domain\TypeHoliday;

/**
 * Class NationalHolidays
 * @package Holidays\Collections
 */
class NationalHolidays extends AbstractCollection
{
    /**
     * NationalHolidays constructor.
     * @param null $year
     */
    public function __construct($year = null)
    {
        parent::__construct($year);
        $this->make();
    }

    private function make()
    {
        $holidays = array_filter($this->getCollection(), function (Holiday $holiday) {
            return $holiday->getType() == TypeHoliday::NATIONAL_HOLIDAY;
        });

        $this->collection = array_values($holidays);
    }
}