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
        return $this->date();
    }

    public function year()
    {
        return date("Y");
    }

    public function getNumberSecondsFromOneDay()
    {
        return 60*60*24;
    }

    public function getDateEaster()
    {
        return easter_date();
    }

    public function formatter()
    {
        return "Y-m-d";
    }
}