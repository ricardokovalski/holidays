<?php

namespace Holidays\Types;

/**
 * Class GoodFriday
 * @package Holidays\Types
 */
class GoodFriday extends AbstractHoliday
{
    /**
     * @return mixed|string
     */
    protected function name()
    {
        return "Paixão de Cristo";
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
     * @return float|int
     */
    public function timestamp()
    {
        return $this->getDateEaster() - (2 * $this->getNumberSecondsFromOneDay());
    }
}