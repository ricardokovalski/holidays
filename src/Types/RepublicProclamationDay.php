<?php

namespace Holidays\Types;

/**
 * Class RepublicProclamationDay
 * @package Holidays\Types
 */
class RepublicProclamationDay extends AbstractHoliday
{
    /**
     * RepublicProclamationDay constructor.
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
        return "Proclamação da República";
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
        return strtotime("15 November {$this->getYear()}");
    }
}
