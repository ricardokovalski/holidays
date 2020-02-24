<?php

namespace Holidays\Types;

class Carnival extends AbstractHoliday
{
    protected function name()
    {
        return "Carnaval";
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
        return $this->getDateEaster() - (47 * $this->getNumberSecondsFromOneDay());
    }
}