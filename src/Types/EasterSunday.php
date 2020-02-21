<?php

namespace Holidays\Types;

use Holidays\AbstractHoliday;

class EasterSunday extends AbstractHoliday
{
    protected function name()
    {
        return "Páscoa";
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
        return $this->getDateEaster();
    }
}