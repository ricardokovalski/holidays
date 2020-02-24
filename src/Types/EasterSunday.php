<?php

namespace Holidays\Types;

class EasterSunday extends AbstractHoliday
{
    protected function name()
    {
        return "Páscoa";
    }

    protected function date()
    {
        return date($this->formatter(), $this->timestamp());
    }

    protected function national()
    {
        return true;
    }

    protected function type()
    {
        return \Holidays\Domain\TypeHoliday::NATIONAL_HOLIDAY;
    }

    public function timestamp()
    {
        return $this->getDateEaster();
    }
}