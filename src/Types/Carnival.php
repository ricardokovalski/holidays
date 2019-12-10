<?php

namespace Holidays\Types;

use Holidays\AbstractHoliday;

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

    public function timestamp()
    {
        return $this->getDateEaster() - (47 * $this->getNumberSecondsFromOneDay());
    }
}