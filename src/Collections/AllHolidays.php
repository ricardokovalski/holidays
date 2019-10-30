<?php

namespace Holidays\Collections;

use Holidays\Contract\Holiday;

class AllHolidays
{
    protected $collection = [];

    public function __construct()
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
    public function addHoliday(Holiday $holiday)
    {
        array_push($this->collection, $holiday);
        return $this;
    }

    /**
     * @return array
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @param Holiday $holiday
     * @return bool
     */
    private function verifyExistsCollection(Holiday $holiday)
    {
        foreach ($this->getCollection() as $item) {
            if ($item->getName() == $holiday->getName()) {
                return true;
                break;
            }
        }
        return false;
    }

}