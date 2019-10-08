<?php

namespace Holidays\Contract;

interface Holiday
{
    public function getNameHoliday();

    public function getDateHoliday();

    public function formatter();
}