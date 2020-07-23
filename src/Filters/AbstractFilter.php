<?php

namespace Holidays\Filters;

/**
 * Class AbstractFilter
 * @package Holidays\Filters
 */
abstract class AbstractFilter
{
    /**
     * @var array
     */
    private $dates = [];

    /**
     * AbstractFilter constructor.
     * @param array $dates
     */
    public function __construct(array $dates)
    {
        $this->dates = $dates;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return current($this->dates)->setTime(0, 0, 0);
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return current(array_reverse($this->dates))->setTime(23, 59, 59);
    }
}