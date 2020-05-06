<?php

namespace Holidays\Types;

/**
 * Class MotherDay
 * @package Holidays\Types
 */
class MotherDay extends AbstractHoliday
{
    /**
     * @return mixed|string
     */
    protected function name()
    {
        return "Dia das Mães";
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
     * @return false|int
     */
    public function timestamp()
    {
        return strtotime("second Sunday of May {$this->getYear()}");
    }
}
