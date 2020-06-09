<?php

use Holidays\Collections\Seasons;

class SeasonsTest extends \PHPUnit_Framework_TestCase
{
    private $collection;

    public function setUp() {
        $this->collection = new Seasons;
    }

    public function testAssertEqualsSeasonsCollection()
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
            \Holidays\Types\DecemberSolstice::class,
            $this->collection->first()
        );
    }

    public function testAssertInstanceOfLastElementCollection()
    {
        $this->assertInstanceOf(
            \Holidays\Types\SeptemberEquinox::class,
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
            \Holidays\Types\MarchEquinox::class,
            $this->collection
                ->orderByName()
                ->ascending()
                ->first()
        );
    }

    public function testAssertInstanceOfLastElementCollectionOrderByNameAscending()
    {
        $this->assertInstanceOf(
            \Holidays\Types\DecemberSolstice::class,
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
            \Holidays\Types\DecemberSolstice::class,
            $this->collection
                ->orderByName()
                ->descending()
                ->first());
    }

    public function testAssertInstanceOfLastElementCollectionOrderByNameDescending()
    {
        $this->assertInstanceOf(
            \Holidays\Types\MarchEquinox::class,
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
            \Holidays\Types\MarchEquinox::class,
            $this->collection
                ->orderByDate()
                ->ascending()
                ->first()
        );
    }

    public function testAssertInstanceOfLastElementCollectionOrderByDateAscending()
    {
        $this->assertInstanceOf(
            \Holidays\Types\DecemberSolstice::class,
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
            \Holidays\Types\DecemberSolstice::class,
            $this->collection
                ->orderByDate()
                ->descending()
                ->first()
        );
    }

    public function testAssertInstanceOfLastElementCollectionOrderByDateDescending()
    {
        $this->assertInstanceOf(
            \Holidays\Types\MarchEquinox::class,
            $this->collection
                ->orderByDate()
                ->descending()
                ->last()
        );
    }

    private function expectedCollectionDefault()
    {
        return [
            new Holidays\Types\DecemberSolstice,
            new Holidays\Types\JuneSolstice,
            new Holidays\Types\MarchEquinox,
            new Holidays\Types\SeptemberEquinox,
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