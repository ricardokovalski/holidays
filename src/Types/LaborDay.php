<?php

namespace Holidays\Types;

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

    protected function type()
    {
        return \Holidays\Domain\TypeHoliday::NATIONAL_HOLIDAY;
    }
    
    public function timestamp()
    {
        return strtotime("01 May {$this->getYear()}");
    }
}
