<?php

namespace Holidays\Types;

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

    protected function type()
    {
        return \Holidays\Domain\TypeHoliday::OPTIONAL_HOLIDAY;
    }

    public function timestamp()
    {
        return $this->getDateEaster() + (60 * $this->getNumberSecondsFromOneDay());
    }
}