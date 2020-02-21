<?php

namespace Holidays\Types;

use Holidays\AbstractHoliday;

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

    public function timestamp()
    {
        return $this->getDateEaster() - (2 * $this->getNumberSecondsFromOneDay());
    }
}