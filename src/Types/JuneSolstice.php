<?php

namespace Holidays\Types;

class JuneSolstice extends AbstractHoliday
{
    protected function name()
    {
        return "Solstício de Inverno";
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
        return strtotime("20 June {$this->getYear()}");
    }
}
