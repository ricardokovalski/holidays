<?php

namespace Holidays\Types;

/**
 * Class LaborDay
 * @package Holidays\Types
 */
class LaborDay extends AbstractHoliday
{
    /**
     * LaborDay constructor.
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
        return "Dia do Trabalhador";
    }

    /**
     * @return mixed|string
     */
    protected function type()
    {
        return \Holidays\Domain\TypeHoliday::NATIONAL;
    }

    /**
     * @return false|int|mixed
     */
    protected function timestamp()
    {
        return strtotime("01 May {$this->getYear()}");
    }
}
