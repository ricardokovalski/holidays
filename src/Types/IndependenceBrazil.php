<?php

namespace Holidays\Types;

class IndependenceBrazil extends AbstractHoliday
{
    protected function name()
    {
        return "Independência do Brasil";
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
        return strtotime("07 September {$this->getYear()}");
    }
}