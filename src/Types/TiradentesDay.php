<?php

namespace Holidays\Types;

/**
 * Class TiradentesDay
 * @package Holidays\Types
 */
class TiradentesDay extends AbstractHoliday
{
    /**
     * TiradentesDay constructor.
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
        return "Tiradentes";
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
        if ($year) {
            return strtotime("21 April {$year}");
        }

        $year = date('Y');
        return strtotime("21 April {$year}");
    }
}
