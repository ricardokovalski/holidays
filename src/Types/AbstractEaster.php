<?php

namespace Holidays\Types;

/**
 * Class AbstractEaster
 * @package Holidays\Types
 */
abstract class AbstractEaster extends AbstractHoliday
{
    /**
     * @return float|int
     */
    protected function getNumberSecondsFromOneDay()
    {
        return 60 * 60 * 24;
    }

    /**
     * @param $year
     * @return int
     */
    protected function getDateEaster($year)
    {
        if ($year) {
            return easter_date($year);
        }

        return easter_date();
    }

}