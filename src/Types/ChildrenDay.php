<?php

namespace Holidays\Types;

class ChildrenDay extends AbstractHoliday
{
    protected function name()
    {
        return "Dia das Crianças";
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
        return strtotime("12 October {$this->getYear()}");
    }
}
