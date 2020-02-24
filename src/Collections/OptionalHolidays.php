<?php

namespace Holidays\Collections;

use Holidays\Contract\Holiday;
use Holidays\Domain\TypeHoliday;

class OptionalHolidays extends AbstractCollection
{
    public function __construct()
    {
        parent::__construct();
        $this->make();
    }

    private function make()
    {
        $holidays = array_filter($this->getCollection(), function (Holiday $holiday) {
            return $holiday->getType() == TypeHoliday::OPTIONAL_HOLIDAY;
        });

        $this->collection = array_values($holidays);
    }
}