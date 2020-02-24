<?php

namespace Holidays\Types;

class ChristmasDay extends AbstractHoliday
{
    protected function name()
    {
        return "Natal";
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
        return strtotime("25 December {$this->getYear()}");
    }
}