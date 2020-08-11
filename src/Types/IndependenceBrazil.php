<?php

namespace Holidays\Types;

/**
 * Class IndependenceBrazil
 * @package Holidays\Types
 */
class IndependenceBrazil extends AbstractHoliday
{
    /**
     * IndependenceBrazil constructor.
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
        return "Independência do Brasil";
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
        return strtotime("07 September {$this->getYear()}");
    }
}