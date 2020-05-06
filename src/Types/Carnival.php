<?php

namespace Holidays\Types;

/**
 * Class Carnival
 * @package Holidays\Types
 */
class Carnival extends AbstractHoliday
{
    /**
     * @return mixed|string
     */
    protected function name()
    {
        return "Carnaval";
    }

    /**
     * @return false|mixed|string
     */
    protected function date()
    {
        return date($this->formatter(), $this->timestamp());
    }

    /**
     * @return bool|mixed
     */
    protected function national()
    {
        return false;
    }

    /**
     * @return mixed|string
     */
    protected function type()
    {
        return \Holidays\Domain\TypeHoliday::OPTIONAL_HOLIDAY;
    }

    /**
     * @return float|int
     */
    public function timestamp()
    {
        return $this->getDateEaster() - (47 * $this->getNumberSecondsFromOneDay());
    }
}