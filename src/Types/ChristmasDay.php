<?php

namespace Holidays\Types;

/**
 * Class ChristmasDay
 * @package Holidays\Types
 */
class ChristmasDay extends AbstractHoliday
{
    /**
     * ChristmasDay constructor.
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
        return "Natal";
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
        return strtotime("25 December {$this->getYear()}");
    }
}