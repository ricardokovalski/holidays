<?php

namespace Holidays\Filters;

use Holidays\Contract\Filter;
use Holidays\Contract\Holiday;

/**
 * Class Between
 * @package Holidays\Filters
 */
class Between implements Filter
{
    /**
     * @var $collection array
     */
    private $collection = [];

    /**
     * @var $dates array
     */
    private $dates = [];

    /**
     * Between constructor.
     * @param array $collection
     * @param array $dates
     */
    public function __construct(array $collection, array $dates)
    {
        $this->collection = $collection;
        $this->dates = $dates;
        $this->execute();
    }

    /**
     * @return mixed|void
     */
    public function execute()
    {
        $this->collection = array_values(
            array_filter($this->collection, function (Holiday $holiday) {
                list($startDate, $endDate) = $this->dates;
                return $holiday->getTimestamp() >= $startDate->getTimestamp() && $holiday->getTimestamp() <= $endDate->getTimestamp();
            })
        );
    }

    /**
     * @return array
     */
    public function get()
    {
        return $this->collection;
    }
}