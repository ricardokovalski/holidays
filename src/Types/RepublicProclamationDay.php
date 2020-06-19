<?php

namespace Holidays\Types;

/**
 * Class RepublicProclamationDay
 * @package Holidays\Types
 */
class RepublicProclamationDay extends AbstractHoliday
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
        return "Proclamação da República";
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
        return strtotime("15 November {$year}");
    }
}
