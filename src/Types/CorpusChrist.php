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
        return date('d/m/Y', $this->getDateEaster() + (60 * $this->getNumberSecondsFromOneDay()));
    }

    protected function day()
    {
        return 0;
    }

    protected function month()
    {
        return 0;
    }
}