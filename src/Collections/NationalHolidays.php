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
        $this->applyFilter();
    }

    /**
     * @return mixed
     */
    public function applyFilter()
    {
        $this->collection = array_values(
            array_filter($this->getCollection(), function (Holiday $holiday) {
                return $holiday->getType() == TypeHoliday::NATIONAL;
            })
        );
    }
}