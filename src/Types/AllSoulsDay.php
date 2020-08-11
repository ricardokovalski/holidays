<?php

namespace Holidays\Types;

/**
 * Class AllSoulsDay
 * @package Holidays\Types
 */
class AllSoulsDay extends AbstractHoliday
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
        return "Finados";
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
        return strtotime("02 November {$this->getYear()}");
    }
}
