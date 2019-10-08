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
        return date($this->formatter(), $this->getDateEaster() + (60 * $this->getNumberSecondsFromOneDay()));
    }

    protected function day()
    {
        // TODO: Implement day() method.
    }

    protected function month()
    {
        // TODO: Implement month() method.
    }

    public function formatter()
    {
        return "d/m/Y";
    }
}