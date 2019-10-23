<?php

namespace Holidays\Types;

use Holidays\AbstractHoliday;

class LaborDay extends AbstractHoliday
{
    protected function name()
    {
        return "Dia do Trabalhador";
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
        return strtotime($this->getYear() . "-05-01");
    }
}
