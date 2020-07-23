<?php

namespace Holidays\Filters;

use InvalidArgumentException;

/**
 * Trait FilterableTrait
 * @package Holidays\Filters
 */
trait FilterableTrait
{
    /**
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $endDate
     * @return $this
     */
    public function between(\DateTimeInterface $startDate, \DateTimeInterface $endDate)
    {
        $this->verifyDates($startDate, $endDate);

        $this->collection = (new Between([$startDate, $endDate], $this->collection))->getFilteredData();

        return $this;
    }

    /**
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $endDate
     * @return $this
     */
    public function notBetween(\DateTimeInterface $startDate, \DateTimeInterface $endDate)
    {
        $this->verifyDates($startDate, $endDate);

        $this->collection = (new NotBetween([$startDate, $endDate], $this->collection))->getFilteredData();

        return $this;
    }

    /**
     * @param \DateTimeInterface $date
     * @return $this
     */
    public function greaterThan(\DateTimeInterface $date)
    {
        $this->collection = (new GreaterThan([$date], $this->collection))->getFilteredData();

        return $this;
    }

    /**
     * @param \DateTimeInterface $date
     * @return $this
     */
    public function lessThan(\DateTimeInterface $date)
    {
        $this->collection = (new LessThan([$date], $this->collection))->getFilteredData();

        return $this;
    }

    /**
     * @param \DateTimeInterface $date
     * @return $this
     */
    public function greaterThanEqual(\DateTimeInterface $date)
    {
        $this->collection = (new GreaterThan([$date], $this->collection, true))->getFilteredData();

        return $this;
    }

    /**
     * @param \DateTimeInterface $date
     * @return $this
     */
    public function lessThanEqual(\DateTimeInterface $date)
    {
        $this->collection = (new LessThan([$date], $this->collection, true))->getFilteredData();

        return $this;
    }

    /**
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $endDate
     */
    private function verifyDates(\DateTimeInterface $startDate, \DateTimeInterface $endDate)
    {
        if ($startDate > $endDate) {
            throw new InvalidArgumentException('Start date must be a date before the end date.');
        }
    }
}