<?php

namespace Holidays\Types;

/**
 * Class DecemberSolstice
 * @package Holidays\Types
 */
class DecemberSolstice extends AbstractHoliday
{
    /**
     * DecemberSolstice constructor.
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
        return "Solstício de Verão";
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
        return strtotime("21 December {$year}");
    }
}
