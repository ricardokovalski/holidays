<?php

namespace Holidays;

use Holidays\Contract\Holiday;

abstract class AbstractHoliday implements Holiday
{
    abstract protected function name();
    abstract protected function date();
    abstract protected function day();
    abstract protected function month();

    public function formatter()
    {
        return "Y-m-d";
    }

    public function getNameHoliday()
    {
        return $this->name();
    }

    public function getDateHoliday()
    {
        return $this->date();
    }

    public function getDayHoliday()
    {
        return $this->day();
    }

    public function getMonthHoliday()
    {
        return $this->month();
    }

    protected function year()
    {
        return date("Y");
    }

    protected function getNumberSecondsFromOneDay()
    {
        return 60*60*24;
    }

    protected function getDateEaster()
    {
        return easter_date();
    }
}