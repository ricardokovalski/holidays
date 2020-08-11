<?php

namespace Holidays\Types;

/**
 * Class NewYearsDay
 * @package Holidays\Types
 */
class NewYearsDay extends AbstractHoliday
{
    /**
     * NewYearsDay constructor.
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
        return strtotime("01 January {$this->getYear()}");
    }
}
