<?php

namespace Holidays;

class Christmas extends AbstractHoliday
{
    protected function setName()
    {
        return 'Natal';
    }

    protected function setDate()
    {
        return '25/12/2019';
    }
}