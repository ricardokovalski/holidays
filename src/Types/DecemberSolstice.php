<?php

namespace Holidays\Types;

class DecemberSolstice extends AbstractHoliday
{
    protected function name()
    {
        return "Solstício de Verão";
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
        return strtotime("21 December {$this->getYear()}");
    }
}
