<?php

namespace Holidays\Types;

class TiradentesDay extends AbstractHoliday
{
    protected function name()
    {
        return "Tiradentes";
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
        return strtotime("21 April {$this->getYear()}");
    }
}
