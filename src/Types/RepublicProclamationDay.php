<?php

namespace Holidays\Types;

use Holidays\AbstractHoliday;

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
    
    public function timestamp()
    {
        return strtotime($this->getYear() . "-11-15");
    }
}
