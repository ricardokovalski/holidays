<?php

namespace Holidays\Types;

/**
 * Class FatherDay
 * @package Holidays\Types
 */
class FatherDay extends AbstractHoliday
{
    /**
     * FatherDay constructor.
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
        return "Dia dos Pais";
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
        return strtotime("Second Sunday of August {$this->getYear()}");
    }
}
