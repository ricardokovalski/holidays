<?php

namespace Holidays;

abstract class AbstractHoliday implements HolidayInterface
{
    abstract protected function setName();
    abstract protected function setDate();

    public function getNameHoliday()
    {
        return $this->setName();
    }

    public function getDateHoliday()
    {
        return $this->setDate();
    }
}