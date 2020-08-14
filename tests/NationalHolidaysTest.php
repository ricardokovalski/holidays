<?php

class NationalHolidaysTest extends \PHPUnit_Framework_TestCase
{
    private $collection;
    private $actualYear;

    public function setUp() {
        $this->collection = new Holidays\Collections\NationalHolidays();
        $this->actualYear = (int) date('Y');
    }

    public function testAssertEqualsLengthCollection()
    {
        $this->assertEquals(11, $this->collection->length());
    }

    public function testAssertEqualPluckByName()
    {
        $this->assertEquals(

            array_map(function(\Holidays\Contract\Holiday $element) {
                return $element->getName();
            }, $this->expectedCollectionOrderByNameAscending()),

            $this->collection
                ->orderByName()
                ->ascending()
                ->pluckByName()
        );
    }

    public function testAssertEqualsCollectionOrderByNameAscending()
    {
        $this->assertEquals(
            $this->expectedCollectionOrderByNameAscending(),
            $this->collection
                ->orderByName()
                ->ascending()
                ->getCollection()
        );
    }

    public function testAssertInstanceOfFirstElementCollectionOrderByNameAscending()
    {
        $this->assertInstanceOf(
            \Holidays\Types\NewYearsDay::class,
            $this->collection
                ->orderByName()
                ->ascending()
                ->first()
        );
    }

    public function testAssertInstanceOfLastElementCollectionOrderByNameAscending()
    {
        $this->assertInstanceOf(
            \Holidays\Types\TiradentesDay::class,
            $this->collection
                ->orderByName()
                ->ascending()
                ->last()
        );
    }

    public function testAssertEqualsCollectionOrderByNameDescending()
    {
        $this->assertEquals(
            $this->expectedCollectionOrderByNameDescending(),
            $this->collection
                ->orderByName()
                ->descending()
                ->getCollection()
        );
    }

    public function testAssertInstanceOfFirstElementCollectionOrderByNameDescending()
    {
        $this->assertInstanceOf(
            \Holidays\Types\TiradentesDay::class,
            $this->collection
                ->orderByName()
                ->descending()
                ->first());
    }

    public function testAssertInstanceOfLastElementCollectionOrderByNameDescending()
    {
        $this->assertInstanceOf(
            \Holidays\Types\NewYearsDay::class,
            $this->collection
                ->orderByName()
                ->descending()
                ->last()
        );
    }

    public function testAssertEqualsCollectionOrderByTimestampAscending()
    {
        $this->assertEquals(
            $this->expectedCollectionOrderByTimestampAscending(),
            $this->collection
                ->orderByTimestamp()
                ->ascending()
                ->getCollection()
        );
    }

    public function testAssertInstanceOfFirstElementCollectionOrderByTimestampAscending()
    {
        $this->assertInstanceOf(
            \Holidays\Types\NewYearsDay::class,
            $this->collection
                ->orderByTimestamp()
                ->ascending()
                ->first()
        );
    }

    public function testAssertInstanceOfLastElementCollectionOrderByTimestampAscending()
    {
        $this->assertInstanceOf(
            \Holidays\Types\ChristmasDay::class,
            $this->collection
                ->orderByTimestamp()
                ->ascending()
                ->last()
        );
    }

    public function testAssertEqualsCollectionOrderByTimestampDescending()
    {
        $this->assertEquals(
            $this->expectedCollectionOrderByTimestampDescending(),
            $this->collection
                ->orderByTimestamp()
                ->descending()
                ->getCollection()
        );
    }

    public function testAssertInstanceOfFirstElementCollectionOrderByTimestampDescending()
    {
        $this->assertInstanceOf(
            \Holidays\Types\ChristmasDay::class,
            $this->collection
                ->orderByTimestamp()
                ->descending()
                ->first()
        );
    }

    public function testAssertInstanceOfLastElementCollectionOrderByTimestampDescending()
    {
        $this->assertInstanceOf(
            \Holidays\Types\NewYearsDay::class,
            $this->collection
                ->orderByTimestamp()
                ->descending()
                ->last()
        );
    }

    private function expectedCollectionDefault($year)
    {
        return [
            new \Holidays\Types\AllSoulsDay($year),
            new \Holidays\Types\ChildrenDay($year),
            new \Holidays\Types\ChristmasDay($year),
            new \Holidays\Types\EasterSunday($year),
            new \Holidays\Types\GoodFriday($year),
            new \Holidays\Types\IndependenceBrazil($year),
            new \Holidays\Types\LaborDay($year),
            new \Holidays\Types\NewYearsDay($year),
            new \Holidays\Types\OurLadyOfAparecida($year),
            new \Holidays\Types\RepublicProclamationDay($year),
            new \Holidays\Types\TiradentesDay($year),
        ];
    }

    private function expectedCollectionOrderByNameAscending()
    {
        $collection = $this->expectedCollectionDefault($this->getActualYear());

        usort($collection, function(\Holidays\Contract\Holiday $a, \Holidays\Contract\Holiday $b) {
            return $a->getName() > $b->getName();
        });

        return $collection;
    }

    private function expectedCollectionOrderByNameDescending()
    {
        return array_reverse($this->expectedCollectionOrderByNameAscending());
    }

    private function expectedCollectionOrderByTimestampAscending()
    {
        $collection = $this->expectedCollectionDefault($this->getActualYear());

        usort($collection, function(\Holidays\Contract\Holiday $a, \Holidays\Contract\Holiday $b) {
            return $a->getTimestamp() > $b->getTimestamp();
        });

        return $collection;
    }

    private function expectedCollectionOrderByTimestampDescending()
    {
        $collection = $this->expectedCollectionDefault($this->getActualYear());

        usort($collection, function(\Holidays\Contract\Holiday $a, \Holidays\Contract\Holiday $b) {
            return $a->getTimestamp() < $b->getTimestamp();
        });

        return $collection;
    }

    public function getActualYear()
    {
        return $this->actualYear;
    }
}