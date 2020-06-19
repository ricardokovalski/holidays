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

    protected $sortField;

    private $year;

    /**
     * AbstractCollection constructor.
     * @param $year
     */
    public function __construct($year)
    {
        $this->year = $year;
        $this->makeCollection();
    }

    private function makeCollection()
    {
        $this->addHoliday(new \Holidays\Types\AllSoulsDay($this->year))
            ->addHoliday(new \Holidays\Types\Carnival($this->year))
            ->addHoliday(new \Holidays\Types\ChildrenDay($this->year))
            ->addHoliday(new \Holidays\Types\ChristmasDay($this->year))
            ->addHoliday(new \Holidays\Types\CorpusChrist($this->year))
            ->addHoliday(new \Holidays\Types\DecemberSolstice($this->year))
            ->addHoliday(new \Holidays\Types\EasterSunday($this->year))
            ->addHoliday(new \Holidays\Types\FatherDay($this->year))
            ->addHoliday(new \Holidays\Types\GoodFriday($this->year))
            ->addHoliday(new \Holidays\Types\IndependenceBrazil($this->year))
            ->addHoliday(new \Holidays\Types\JuneSolstice($this->year))
            ->addHoliday(new \Holidays\Types\LaborDay($this->year))
            ->addHoliday(new \Holidays\Types\MarchEquinox($this->year))
            ->addHoliday(new \Holidays\Types\MotherDay($this->year))
            ->addHoliday(new \Holidays\Types\NewYearsDay($this->year))
            ->addHoliday(new \Holidays\Types\OurLadyOfAparecida($this->year))
            ->addHoliday(new \Holidays\Types\RepublicProclamationDay($this->year))
            ->addHoliday(new \Holidays\Types\SeptemberEquinox($this->year))
            ->addHoliday(new \Holidays\Types\TiradentesDay($this->year));
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
    public function orderByTimestamp()
    {
        $this->sortField = 'getTimestamp';
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

    /**
     * @return mixed
     */
    public function first()
    {
        return current($this->collection);
    }

    /**
     * @return mixed
     */
    public function last()
    {
        return end($this->collection);
    }

    /**
     * @return int
     */
    public function length()
    {
        return count($this->collection);
    }
}