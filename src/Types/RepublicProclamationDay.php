<?php

namespace Holidays\Types;

class RepublicProclamationDay extends AbstractHoliday
{
    protected function name()
    {
        return "Proclamação da República";
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
        return strtotime("15 November {$this->getYear()}");
    }
}
