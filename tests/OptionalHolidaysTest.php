<?php

class OptionalHolidaysTest extends \PHPUnit_Framework_TestCase
{
    private $collection;
    private $actualYear;

    public function setUp() {
        $this->collection = new Holidays\Collections\OptionalHolidays();
        $this->actualYear = (int) date('Y');
    }

    public function testAssertEqualsLengthCollection()
    {
        $this->assertEquals(4, $this->collection->length());
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
            \Holidays\Types\Carnival::class,
            $this->collection
                ->orderByTimestamp()
                ->ascending()
                ->first()
        );
    }

    public function testAssertInstanceOfLastElementCollectionOrderByTimestampAscending()
    {
        $this->assertInstanceOf(
            \Holidays\Types\FatherDay::class,
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
            \Holidays\Types\FatherDay::class,
            $this->collection
                ->orderByTimestamp()
                ->descending()
                ->first()
        );
    }

    public function testAssertInstanceOfLastElementCollectionOrderByTimestampDescending()
    {
        $this->assertInstanceOf(
            \Holidays\Types\Carnival::class,
            $this->collection
                ->orderByTimestamp()
                ->descending()
                ->last()
        );
    }

    private function expectedCollectionDefault($year)
    {
        return [
            new \Holidays\Types\Carnival($year),
            new \Holidays\Types\CorpusChrist($year),
            new \Holidays\Types\FatherDay($year),
            new \Holidays\Types\MotherDay($year),
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