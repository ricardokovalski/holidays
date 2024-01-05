<?php

namespace Holidays\Collections;

use Holidays\Contract\Collection;
use Holidays\Contract\Holiday;
use Holidays\Domain\SortField;
use Holidays\Filters\FilterableTrait;

/**
 * Class AbstractCollection
 * @package Holidays\Collections
 */
abstract class AbstractCollection implements Collection
{
    use FilterableTrait;

    /**
     * @var $collection array
     */
    protected $collection = [];

    /**
     * @var $sortField
     */
    protected $sortField;

    /**
     * @var $year
     */
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
        $this->sortField = SortField::GET_NAME;
        return $this;
    }

    /**
     * @return $this
     */
    public function orderByTimestamp()
    {
        $this->sortField = SortField::GET_TIMESTAMP;
        return $this;
    }

    /**
     * @return $this
     */
    public function ascending()
    {
        usort($this->collection, function(Holiday $a, Holiday $b) {
            return $a->{$this->sortField}() <=> $b->{$this->sortField}();
        });

        return $this;
    }

    /**
     * @return $this
     */
    public function descending()
    {
        usort($this->collection, function(Holiday $a, Holiday $b) {
            return ($a->{$this->sortField}() <=> $b->{$this->sortField}()) * -1;
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

    /**
     * @return array
     */
    public function pluckByName()
    {
        return array_map(function(Holiday $element) {
            return $element->getName();
        }, $this->collection);
    }

    /**
     * @return array
     */
    public function pluckByTimestamp()
    {
        return array_map(function(Holiday $element) {
            return $element->getTimestamp();
        }, $this->collection);
    }
}
