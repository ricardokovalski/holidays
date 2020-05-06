<?php

namespace Holidays\Types;

/**
 * Class FatherDay
 * @package Holidays\Types
 */
class FatherDay extends AbstractHoliday
{
    /**
     * @return mixed|string
     */
    protected function name()
    {
        return "Dia dos Pais";
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
        return strtotime("second Sunday of August {$this->getYear()}");
    }
}
