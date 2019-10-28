<?php

namespace Holidays\Types;

use Holidays\AbstractHoliday;

class Tiradentes extends AbstractHoliday
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

    public function timestamp()
    {
        return strtotime($this->getYear() . "-04-21");
    }
}