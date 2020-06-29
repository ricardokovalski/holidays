<?php

namespace Holidays\Types;

/**
 * Class SeptemberEquinox
 * @package Holidays\Types
 */
class SeptemberEquinox extends AbstractHoliday
{
    /**
     * SeptemberEquinox constructor.
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
        return "Equinócio de Primavera";
    }

    /**
     * @return bool|mixed
     */
    protected function national()
    {
        return false;
    }

    /**
     * @return mixed|string
     */
    protected function type()
    {
        return \Holidays\Domain\TypeHoliday::SEASON;
    }

    /**
     * @param $year
     * @return false|int
     */
    protected function timestamp($year)
    {
        $year = $year ?: date('Y');
        return strtotime("22 September {$year}");
    }
}
