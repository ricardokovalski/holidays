<?php

namespace Holidays\Collections;

use Holidays\Contract\Holiday;
use Holidays\Domain\TypeHoliday;

/**
 * Class Seasons
 * @package Holidays\Collections
 */
class Seasons extends AbstractCollection
{
    /**
     * Seasons constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->make();
    }

    private function make()
    {
        $holidays = array_filter($this->getCollection(), function (Holiday $holiday) {
            return $holiday->getType() == TypeHoliday::SEASON;
        });

        $this->collection = array_values($holidays);
    }
}