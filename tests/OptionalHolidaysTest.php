<?php

use Holidays\Collections\OptionalHolidays;

class OptionalHolidaysTest extends \PHPUnit_Framework_TestCase
{
    private $collection;

    public function setUp() {
        $this->collection = new OptionalHolidays;
    }

    public function testAssertEqualsOptionalHolidaysCollection()
    {
        $this->assertEquals(
            $this->expectedCollectionDefault(),
            $this->collection->getCollection()
        );
    }

    public function testCountCollection()
    {
        $this->assertCount(
            4,
            $this->collection->getCollection()
        );
    }

    public function testAssertInstanceOfFirstElementCollection()
    {
        $this->assertInstanceOf(
            \Holidays\Types\Carnival::class,
            $this->collection->first()
        );
    }

    public function testAssertInstanceOfLastElementCollection()
    {
        $this->assertInstanceOf(
            \Holidays\Types\MotherDay::class,
            $this->collection->last()
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
            \Holidays\Types\Carnival::class,
            $this->collection
                ->orderByName()
                ->ascending()
                ->first()
        );
    }

    public function testAssertInstanceOfLastElementCollectionOrderByNameAscending()
    {
        $this->assertInstanceOf(
            \Holidays\Types\FatherDay::class,
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
            \Holidays\Types\FatherDay::class,
            $this->collection
                ->orderByName()
                ->descending()
                ->first());
    }

    public function testAssertInstanceOfLastElementCollectionOrderByNameDescending()
    {
        $this->assertInstanceOf(
            \Holidays\Types\Carnival::class,
            $this->collection
                ->orderByName()
                ->descending()
                ->last()
        );
    }

    public function testAssertEqualsCollectionOrderByDateAscending()
    {
        $this->assertEquals(
            $this->expectedCollectionOrderByDateAscending(),
            $this->collection
                ->orderByDate()
                ->ascending()
                ->getCollection()
        );
    }

    public function testAssertInstanceOfFirstElementCollectionOrderByDateAscending()
    {
        $this->assertInstanceOf(
            \Holidays\Types\Carnival::class,
            $this->collection
                ->orderByDate()
                ->ascending()
                ->first()
        );
    }

    public function testAssertInstanceOfLastElementCollectionOrderByDateAscending()
    {
        $this->assertInstanceOf(
            \Holidays\Types\FatherDay::class,
            $this->collection
                ->orderByDate()
                ->ascending()
                ->last()
        );
    }

    public function testAssertEqualsCollectionOrderByDateDescending()
    {
        $this->assertEquals(
            $this->expectedCollectionOrderByDateDescending(),
            $this->collection
                ->orderByDate()
                ->descending()
                ->getCollection()
        );
    }

    public function testAssertInstanceOfFirstElementCollectionOrderByDateDescending()
    {
        $this->assertInstanceOf(
            \Holidays\Types\FatherDay::class,
            $this->collection
                ->orderByDate()
                ->descending()
                ->first()
        );
    }

    public function testAssertInstanceOfLastElementCollectionOrderByDateDescending()
    {
        $this->assertInstanceOf(
            \Holidays\Types\Carnival::class,
            $this->collection
                ->orderByDate()
                ->descending()
                ->last()
        );
    }

    private function expectedCollectionDefault()
    {
        return [
            new \Holidays\Types\Carnival,
            new \Holidays\Types\CorpusChrist,
            new \Holidays\Types\FatherDay,
            new \Holidays\Types\MotherDay,
        ];
    }

    private function expectedCollectionOrderByNameAscending()
    {
        $collection = $this->expectedCollectionDefault();

        usort($collection, function(\Holidays\Contract\Holiday $a, \Holidays\Contract\Holiday $b) {
            return $a->getName() > $b->getName();
        });

        return $collection;
    }

    private function expectedCollectionOrderByNameDescending()
    {
        return array_reverse($this->expectedCollectionOrderByNameAscending());
    }

    private function expectedCollectionOrderByDateAscending()
    {
        $collection = $this->expectedCollectionDefault();

        usort($collection, function(\Holidays\Contract\Holiday $a, \Holidays\Contract\Holiday $b) {
            return $a->getDate() > $b->getDate();
        });

        return $collection;
    }

    private function expectedCollectionOrderByDateDescending()
    {
        return array_reverse($this->expectedCollectionOrderByDateAscending());
    }

}