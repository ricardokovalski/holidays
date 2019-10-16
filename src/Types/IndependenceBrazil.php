<?php

namespace Holidays\Types;

use Holidays\AbstractHoliday;
use Holidays\Helper\Helper;

class IndependenceBrazil extends AbstractHoliday
{
    protected function name()
    {
        return "Independência do Brasil";
    }

    protected function date()
    {
        return date($this->formatter(), strtotime(Helper::dateUnformatted($this->concatDate())));
    }

    protected function day()
    {
        return "07";
    }

    protected function month()
    {
        return "09";
    }

    public function formatter()
    {
        return "d/m/Y";
    }

    public function concatDate()
    {
        return $this->year() . $this->month() . $this->day();
    }
}