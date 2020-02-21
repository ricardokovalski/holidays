<?php

namespace Holidays\Types;

use Holidays\AbstractHoliday;

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

    public function timestamp()
    {
        return strtotime("second Sunday of May {$this->getYear()}");
    }
}
