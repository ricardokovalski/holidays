<?php

namespace Holidays\Types;

/**
 * Class ChristmasDay
 * @package Holidays\Types
 */
class ChristmasDay extends AbstractHoliday
{
    /**
     * ChristmasDay constructor.
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
        return "Natal";
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
        return strtotime("25 December {$year}");
    }
}