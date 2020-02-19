<?php

namespace Holidays\Collections;

use Holidays\Contract\Holiday;
use Holidays\Contract\Collection as HolidayCollection;

class AllHolidays implements HolidayCollection
{
    protected $collection = [];
    protected $sortField;

    public function __construct()
    {
        $this->make();
    }

    private function make()
    {
        $this->addHoliday(new \Holidays\Types\Carnival())
            ->addHoliday(new \Holidays\Types\Christmas())
            ->addHoliday(new \Holidays\Types\CorpusChrist())
            ->addHoliday(new \Holidays\Types\Dead())
            ->addHoliday(new \Holidays\Types\Easter())
            ->addHoliday(new \Holidays\Types\IndependenceBrazil())
            ->addHoliday(new \Holidays\Types\LaborDay())
            ->addHoliday(new \Holidays\Types\NewYear())
            ->addHoliday(new \Holidays\Types\OurLadyAparecida())
            ->addHoliday(new \Holidays\Types\PassionChrist())
            ->addHoliday(new \Holidays\Types\ProclamationRepublic())
            ->addHoliday(new \Holidays\Types\Tiradentes());
    }

    /**
     * @param Holiday $holiday
     * @return $this|bool
     */
    private function addHoliday(Holiday $holiday)
    {
        array_push($this->collection, $holiday);
        return $this;
    }

    /**
     * @return $this
     */
    public function orderByName()
    {
        $this->sortField = 'getName';
        return $this;
    }

    /**
     * @return $this
     */
    public function orderByDate()
    {
        $this->sortField = 'getDate';
        return $this;
    }

    /**
     * @return $this
     */
    public function ascending()
    {
        usort($this->collection, function($a, $b) {
            return $a->{$this->sortField}() > $b->{$this->sortField}();
        });

        return $this;
    }

    /**
     * @return $this
     */
    public function descending()
    {
        usort($this->collection, function($a, $b) {
            return $a->{$this->sortField}() < $b->{$this->sortField}();
        });

        return $this;
    }

    /**
     * @return array
     */
    public function getCollection()
    {
        return $this->collection;
    }
}