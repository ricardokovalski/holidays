<?php

namespace Holidays\Types;

/**
 * Class LaborDay
 * @package Holidays\Types
 */
class LaborDay extends AbstractHoliday
{
    /**
     * @return mixed|string
     */
    protected function name()
    {
        return "Dia do Trabalhador";
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
     * @return false|int
     */
    public function timestamp()
    {
        return strtotime("01 May {$this->getYear()}");
    }
}
