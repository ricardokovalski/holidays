<?php

namespace Holidays\Contract;

interface Holiday
{
    public function formatter();

    public function isHolidayNational();
}