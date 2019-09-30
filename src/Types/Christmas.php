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
        $date = sprintf("%d-%d-%d", $this->year(), $this->month(), $this->day());
        return date($this->formatter(), strtotime($date));
    }

    protected function day()
    {
        return 25;
    }

    protected function month()
    {
        return 12;
    }

    public function formatter()
    {
        return "d/m/Y";
    }
}