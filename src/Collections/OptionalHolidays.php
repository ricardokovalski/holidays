<?php

namespace Holidays\Collections;

use Holidays\Contract\Holiday;
use Holidays\Domain\TypeHoliday;

/**
 * Class OptionalHolidays
 * @package Holidays\Collections
 */
class OptionalHolidays extends AbstractCollection
{
    /**
     * OptionalHolidays constructor.
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
            return $holiday->getType() == TypeHoliday::OPTIONAL_HOLIDAY;
        });

        $this->collection = array_values($holidays);
    }
}