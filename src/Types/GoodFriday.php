<?php

namespace Holidays\Types;

/**
 * Class GoodFriday
 * @package Holidays\Types
 */
class GoodFriday extends AbstractEaster
{
    /**
     * AllSoulsDay constructor.
     * @param null $year
     */
    public function __construct($year = null)
    {
        parent::__construct($year);
    }

    /**
     * @return mixed|string
     */
    protected function name()
    {
        return "Paixão de Cristo";
    }

    /**
     * @return bool|mixed
     */
    protected function national()
    {
        return true;
    }

    /**
     * @return mixed|string
     */
    protected function type()
    {
        return \Holidays\Domain\TypeHoliday::NATIONAL_HOLIDAY;
    }

    /**
     * @param $year
     * @return float|int
     */
    protected function timestamp($year)
    {
        return $this->getDateEaster($year) - (2 * $this->getNumberSecondsFromOneDay());
    }
}