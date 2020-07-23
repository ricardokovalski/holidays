<?php

namespace Holidays\Filters;

use Holidays\Contract\Filter;
use Holidays\Contract\Holiday;

/**
 * Class GreaterThan
 * @package Holidays\Filters
 */
class GreaterThan extends AbstractFilter implements Filter
{
    /**
     * @var $collection array
     */
    private $collection = [];

    /**
     * @var $filteredData array
     */
    private $filteredData = [];

    /**
     * @var $equal bool
     */
    private $equal;

    /**
     * GreaterThan constructor.
     * @param array $dates
     * @param array $collection
     * @param bool $equal
     */
    public function __construct(array $dates, array $collection, $equal = false)
    {
        parent::__construct($dates);
        $this->collection = $collection;
        $this->equal = $equal;
        $this->filterRule()->sortData();
    }

    /**
     * @return $this|mixed
     */
    public function filterRule()
    {
        $this->filteredData = array_filter($this->collection, function (Holiday $holiday) {
            if ($this->equal) {
                return $holiday->getTimestamp() >= $this->getStartDate()->getTimestamp();
            }
            return $holiday->getTimestamp() > $this->getStartDate()->getTimestamp();
        });

        return $this;
    }

    /**
     * @return $this
     */
    public function sortData()
    {
        $this->filteredData = array_values($this->filteredData);

        return $this;
    }

    /**
     * @return array
     */
    public function getFilteredData()
    {
        return $this->filteredData;
    }


}