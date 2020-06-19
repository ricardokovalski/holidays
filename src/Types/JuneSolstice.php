<?php

namespace Holidays\Types;

/**
 * Class JuneSolstice
 * @package Holidays\Types
 */
class JuneSolstice extends AbstractHoliday
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
        return "Solstício de Inverno";
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
        return strtotime("20 June {$year}");
    }
}
