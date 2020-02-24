<?php

namespace Holidays\Types;

class AllSoulsDay extends AbstractHoliday
{
    protected function name()
    {
        return "Finados";
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
        return strtotime("02 November {$this->getYear()}");
    }
}
