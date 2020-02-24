<?php

namespace Holidays;

use Holidays\Contract\Holiday;

abstract class AbstractHoliday implements Holiday
{
    protected $name;

    protected $date;

    protected $isNational;

    public function __construct()
    {
        $this->makeName();
        $this->makeDate();
        $this->makeNational();
    }

    abstract protected function name();
    abstract protected function date();
    abstract protected function national();

    protected function makeName()
    {
        return $this->name = $this->name();
    }

    protected function makeDate()
    {
        return $this->date = $this->date();
    }

    protected function makeNational()
    {
        return $this->isNational = $this->national();
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

    public function isNational()
    {
        return $this->isNational;
    }

    public function getYear()
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