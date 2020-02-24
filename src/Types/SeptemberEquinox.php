<?php

namespace Holidays\Types;

class SeptemberEquinox extends AbstractHoliday
{
    protected function name()
    {
        return "Equinócio de Primavera";
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
        return strtotime("22 September {$this->getYear()}");
    }
}
