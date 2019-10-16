<?php

namespace Holidays\Types;

use Holidays\AbstractHoliday;

class CorpusChrist extends AbstractHoliday
{
    protected function name()
    {
        return "CorpusChrist";
    }

    protected function date()
    {
        return date($this->formatter(), $this->timestamp());
    }

    protected function day()
    {
        return date("d", $this->timestamp());
    }

    protected function month()
    {
        return date("m", $this->timestamp());
    }

    public function formatter()
    {
        return "d/m/Y";
    }

    public function isHolidayNational()
    {
        return false;
    }

    public function timestamp()
    {
        return $this->getDateEaster() + (60 * $this->getNumberSecondsFromOneDay());
    }
}