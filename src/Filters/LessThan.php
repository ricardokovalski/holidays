<?php

namespace Holidays\Filters;

use Holidays\Contract\Filter;
use Holidays\Contract\Holiday;

/**
 * Class LessThan
 * @package Holidays\Filters
 */
class LessThan implements Filter
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
     * @var $equal bool
     */
    private $equal;

    /**
     * LessThan constructor.
     * @param array $collection
     * @param array $dates
     * @param bool $equal
     */
    public function __construct(array $collection, array $dates, $equal = false)
    {
        $this->collection = $collection;
        $this->dates = $dates;
        $this->equal = $equal;
        $this->execute();
    }

    /**
     * @return mixed|void
     */
    public function execute()
    {
        $this->collection = array_values(
            array_filter($this->collection, function (Holiday $holiday) {

                list($date) = $this->dates;

                if ($this->equal) {
                    return $holiday->getTimestamp() <= $date->getTimestamp();
                }

                return $holiday->getTimestamp() < $date->getTimestamp();
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