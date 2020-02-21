<?php

namespace Holidays\Types;

use Holidays\AbstractHoliday;

class FatherDay extends AbstractHoliday
{
    protected function name()
    {
        return "Dia dos Pais";
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
        return strtotime("second Sunday of August {$this->getYear()}");
    }
}
