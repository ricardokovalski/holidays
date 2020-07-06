<?php

namespace Holidays\Collections;

/**
 * Class AllHolidays
 * @package Holidays\Collections
 */
class AllHolidays extends AbstractCollection
{
    /**]
     * AllHolidays constructor.
     * @param $year
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
        $this->collection = array_values($this->getCollection());
    }
}