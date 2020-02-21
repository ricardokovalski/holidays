<?php

namespace Holidays\Types;

use Holidays\AbstractHoliday;

class ChildrenDay extends AbstractHoliday
{
    protected function name()
    {
        return "Dia das Crianças";
    }

    protected function date()
    {
        return date($this->formatter(), $this->timestamp());
    }

    protected function national()
    {
        return true;
    }

    public function timestamp()
    {
        return strtotime($this->getYear() . "-10-12");
    }
}
