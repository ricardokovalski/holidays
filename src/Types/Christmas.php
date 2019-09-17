<?php

namespace Holidays\Types;

use Holidays\AbstractHoliday;

class Christmas extends AbstractHoliday
{
    protected function name()
    {
        return "Natal";
    }

    protected function date()
    {
        return "2019-12-25";
    }

    protected function day()
    {
        return 25;
    }

    protected function month()
    {
        return 12;
    }
}