<?php

namespace Holidays\Types;

/**
 * Class AllSoulsDay
 * @package Holidays\Types
 */
class AllSoulsDay extends AbstractHoliday
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
        return "Finados";
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
     * @return false|int
     */
    protected function timestamp($year)
    {
        $year = $year ?: date('Y');
        return strtotime("02 November {$year}");
    }
}
