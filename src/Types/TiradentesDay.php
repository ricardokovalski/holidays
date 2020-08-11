<?php

namespace Holidays\Types;

/**
 * Class TiradentesDay
 * @package Holidays\Types
 */
class TiradentesDay extends AbstractHoliday
{
    /**
     * TiradentesDay constructor.
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
        return "Tiradentes";
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
        return strtotime("21 April {$this->getYear()}");
    }
}
