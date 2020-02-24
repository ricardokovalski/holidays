<?php

namespace Holidays\Types;

class GoodFriday extends AbstractHoliday
{
    protected function name()
    {
        return "Paixão de Cristo";
    }

    protected function date()
    {
        return date($this->formatter(), $this->timestamp());
    }

    protected function national()
    {
        return true;
    }

    protected function type()
    {
        return \Holidays\Domain\TypeHoliday::NATIONAL_HOLIDAY;
    }

    public function timestamp()
    {
        return $this->getDateEaster() - (2 * $this->getNumberSecondsFromOneDay());
    }
}