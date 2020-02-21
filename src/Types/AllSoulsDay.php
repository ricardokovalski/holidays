<?php

namespace Holidays\Types;

use Holidays\AbstractHoliday;

class Dead extends AbstractHoliday
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
    
    public function timestamp()
    {
        return strtotime($this->getYear() . "-11-02");
    }
}
