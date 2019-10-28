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

    protected function national()
    {
        return false;
    }

    public function timestamp()
    {
        return $this->getDateEaster() + (60 * $this->getNumberSecondsFromOneDay());
    }
}