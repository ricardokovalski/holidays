<?php

namespace Holidays\Types;

/**
 * Class EasterSunday
 * @package Holidays\Types
 */
class EasterSunday extends AbstractHoliday
{
    /**
     * @return mixed|string
     */
    protected function name()
    {
        return "Páscoa";
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
        return true;
    }

    /**
     * @return mixed|string
     */
    protected function type()
    {
        return \Holidays\Domain\TypeHoliday::NATIONAL_HOLIDAY;
    }

    /**
     * @return int
     */
    public function timestamp()
    {
        return $this->getDateEaster();
    }
}