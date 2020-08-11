<?php

namespace Holidays\Types;

/**
 * Class SeptemberEquinox
 * @package Holidays\Types
 */
class SeptemberEquinox extends AbstractHoliday
{
    /**
     * SeptemberEquinox constructor.
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
        return "Equinócio de Primavera";
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
        return strtotime("22 September {$this->getYear()}");
    }
}
