<?php

namespace Holidays\Contract;

interface Holiday
{
    public function formatter();

    public function getNameHoliday();

    public function getDateHoliday();

    public function getDayHoliday();

    public function getMonthHoliday();
}