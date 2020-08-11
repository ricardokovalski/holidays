<?php

namespace Holidays\Types;

/**
 * Class ChildrenDay
 * @package Holidays\Types
 */
class ChildrenDay extends AbstractHoliday
{
    /**
     * ChildrenDay constructor.
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
        return "Dia das Crianças";
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
        return strtotime("12 October {$this->getYear()}");
    }
}
