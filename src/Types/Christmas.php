<?php

namespace Holidays\Types;

use Holidays\AbstractHoliday;

class Christmas extends AbstractHoliday
{
    protected function name()
    {
        return "Natal";
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
        return strtotime($this->getYear() . "-12-25");
    }
}