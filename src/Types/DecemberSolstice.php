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
     * @return mixed|string
     */
    protected function type()
    {
        return \Holidays\Domain\TypeHoliday::SEASON;
    }

    /**
     * @return false|int|mixed
     */
    protected function timestamp()
    {
        return strtotime("21 December {$this->getYear()}");
    }
}
