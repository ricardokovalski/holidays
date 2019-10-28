<?php

namespace Holidays\Types;

use Holidays\AbstractHoliday;

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

    public function timestamp()
    {
        return strtotime($this->getYear() . "-09-07");
    }
}