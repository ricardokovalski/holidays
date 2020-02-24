<?php

namespace Holidays\Types;

class MarchEquinox extends AbstractHoliday
{
    protected function name()
    {
        return "Equinócio de Outono";
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
        return \Holidays\Domain\TypeHoliday::SEASON;
    }

    public function timestamp()
    {
        return strtotime("20 March {$this->getYear()}");
    }
}
