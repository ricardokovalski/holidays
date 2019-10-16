<?php

namespace Holidays;

use Holidays\Contract\Holiday;

abstract class AbstractHoliday implements Holiday
{
    protected $name;

    protected $date;

    protected $day;

    protected $month;

    public function __construct()
    {
        $this->makeName();
        $this->makeDate();
        $this->makeDay();
        $this->makeMonth();
    }

    abstract protected function name();
    abstract protected function date();
    abstract protected function day();
    abstract protected function month();

    public function makeName()
    {
        return $this->name = $this->name();
    }

    public function makeDate()
    {
        return $this->date = $this->date();
    }

    public function makeDay()
    {
        return $this->day = $this->day();
    }

    public function makeMonth()
    {
        return $this->month = $this->month();
    }

    public function formatter()
    {
        return "Y-m-d";
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getDay()
    {
        return $this->day;
    }

    public function getMonth()
    {
        return $this->month;
    }

    public function isHolidayNational()
    {
        return true;
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