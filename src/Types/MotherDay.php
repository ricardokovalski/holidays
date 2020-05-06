<?php

namespace Holidays\Types;

class MotherDay extends AbstractHoliday
{
    protected function name()
    {
        return "Dia das Mães";
    }

    protected function date()
    {
        return date($this->formatter(), $this->timestamp());
    }

    protected function national()
    {
        return false;
    }

    protected function type()
    {
        return \Holidays\Domain\TypeHoliday::OPTIONAL_HOLIDAY;
    }

    public function timestamp()
    {
        return strtotime("second Sunday of May {$this->getYear()}");
    }
}
