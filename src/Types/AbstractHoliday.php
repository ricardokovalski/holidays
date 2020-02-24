<?php

namespace Holidays\Types;

use Holidays\Contract\Holiday;

abstract class AbstractHoliday implements Holiday
{
    protected $name;

    protected $date;

    protected $isNational;

    protected $type;

    public function __construct()
    {
        $this->makeName();
        $this->makeDate();
        $this->makeNational();
        $this->makeType();
    }

    abstract protected function name();
    abstract protected function date();
    abstract protected function national();
    abstract protected function type();

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

    protected function makeType()
    {
        return $this->type = $this->type();
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

    public function getType()
    {
        return $this->type;
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