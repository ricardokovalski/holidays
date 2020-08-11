<?php

namespace Holidays\Types;

/**
 * Class MotherDay
 * @package Holidays\Types
 */
class MotherDay extends AbstractHoliday
{
    /**
     * MotherDay constructor.
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
        return "Dia das Mães";
    }

    /**
     * @return mixed|string
     */
    protected function type()
    {
        return \Holidays\Domain\TypeHoliday::OPTIONAL;
    }

    /**
     * @return false|int|mixed
     */
    protected function timestamp()
    {
        return strtotime("second Sunday of May {$this->getYear()}");
    }
}
