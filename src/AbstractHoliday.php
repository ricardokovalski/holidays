<?php

namespace Holidays;

use Holidays\Contract\Holiday;

abstract class AbstractHoliday implements Holiday
{
    abstract protected function name();
    abstract protected function date();
    abstract protected function day();
    abstract protected function month();

    public function getNameHoliday()
    {
        return $this->name();
    }

    public function getDateHoliday()
    {
        return sprintf("%d/%d/%d", $this->day(), $this->month(), date("Y"));
    }
}