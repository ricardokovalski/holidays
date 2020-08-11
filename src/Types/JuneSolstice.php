<?php

namespace Holidays\Types;

/**
 * Class JuneSolstice
 * @package Holidays\Types
 */
class JuneSolstice extends AbstractHoliday
{
    /**
     * JuneSolstice constructor.
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
        return "Solstício de Inverno";
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
        return strtotime("20 June {$this->getYear()}");
    }
}
