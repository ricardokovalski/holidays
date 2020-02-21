<?php

namespace Holidays\Types;

use Holidays\AbstractHoliday;

class NewYearsDay extends AbstractHoliday
{
    protected function name()
    {
        return "Ano Novo";
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
        return strtotime($this->getYear() . "-01-01");
    }
}
