<?php

namespace Holidays\Types;

class FatherDay extends AbstractHoliday
{
    protected function name()
    {
        return "Dia dos Pais";
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
        return strtotime("second Sunday of August {$this->getYear()}");
    }
}
