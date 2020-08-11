<?php

namespace Holidays\Types;

/**
 * Class MarchEquinox
 * @package Holidays\Types
 */
class MarchEquinox extends AbstractHoliday
{
    /**
     * MarchEquinox constructor.
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
        return "Equinócio de Outono";
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
        return strtotime("20 March {$this->getYear()}");
    }
}
