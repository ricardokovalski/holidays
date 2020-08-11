<?php

namespace Holidays\Types;

use DateInterval;
use DateTime;

/**
 * Class AbstractEaster
 * @package Holidays\Types
 */
abstract class AbstractEaster extends AbstractHoliday
{
    /**
     * @param $year
     * @return int
     * @throws \Exception
     */
    protected function getDateEaster($year)
    {
        $days = easter_days($year);

        return (new DateTime("{$year}-03-21"))
            ->add(new DateInterval("P{$days}D"))
            ->getTimestamp();
    }
}