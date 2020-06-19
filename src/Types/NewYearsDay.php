<?php

namespace Holidays\Types;

/**
 * Class NewYearsDay
 * @package Holidays\Types
 */
class NewYearsDay extends AbstractHoliday
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
        return "Ano Novo";
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
        return strtotime("01 January {$year}");
    }
}
