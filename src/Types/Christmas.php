<?php

namespace Holidays\Types;

use Holidays\AbstractHoliday;
use Holidays\Helper\Helper;

class Christmas extends AbstractHoliday
{
    protected function name()
    {
        return "Natal";
    }

    protected function date()
    {
        return date($this->formatter(), strtotime(Helper::dateUnformatted($this->year().$this->month().$this->day())));
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