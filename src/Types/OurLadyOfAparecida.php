<?php

namespace Holidays\Types;

class OurLadyOfAparecida extends AbstractHoliday
{
    protected function name()
    {
        return "Nossa Senhora Aparecida";
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
