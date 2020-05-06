<?php

namespace Holidays\Collections;

use Holidays\Contract\Holiday;

/**
 * Class AbstractCollection
 * @package Holidays\Collections
 */
abstract class AbstractCollection
{
    /**
     * @var array
     */
    protected $collection = [];

    /**
     * @var
     */
    protected $sortField;

    /**
     * AbstractCollection constructor.
     */
    public function __construct()
    {
        $this->make();
    }

    private function make()
    {
        $this->addHoliday(new \Holidays\Types\AllSoulsDay())
            ->addHoliday(new \Holidays\Types\Carnival())
            ->addHoliday(new \Holidays\Types\ChildrenDay())
            ->addHoliday(new \Holidays\Types\ChristmasDay())
            ->addHoliday(new \Holidays\Types\CorpusChrist())
            ->addHoliday(new \Holidays\Types\DecemberSolstice())
            ->addHoliday(new \Holidays\Types\EasterSunday())
            ->addHoliday(new \Holidays\Types\FatherDay())
            ->addHoliday(new \Holidays\Types\GoodFriday())
            ->addHoliday(new \Holidays\Types\IndependenceBrazil())
            ->addHoliday(new \Holidays\Types\JuneSolstice())
            ->addHoliday(new \Holidays\Types\LaborDay())
            ->addHoliday(new \Holidays\Types\MarchEquinox())
            ->addHoliday(new \Holidays\Types\MotherDay())
            ->addHoliday(new \Holidays\Types\NewYearsDay())
            ->addHoliday(new \Holidays\Types\OurLadyOfAparecida())
            ->addHoliday(new \Holidays\Types\RepublicProclamationDay())
            ->addHoliday(new \Holidays\Types\SeptemberEquinox())
            ->addHoliday(new \Holidays\Types\TiradentesDay());
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