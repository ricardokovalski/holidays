<?php

class AllHolidaysTest extends \PHPUnit_Framework_TestCase
{
    private $collection;
    private $actualYear;

    public function setUp()
    {
        $this->collection = new Holidays\Collections\AllHolidays();
        $this->actualYear = (int) date('Y');
    }

    public function testAssertEqualLengthCollection()
    {
        $this->assertEquals(19, $this->collection->length());
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

    public function testAssertEqualPluckByTimestamp()
    {
        $this->assertEquals(

            array_map(function(\Holidays\Contract\Holiday $element) {
                return $element->getTimestamp();
            }, $this->expectedCollectionOrderByTimestampAscending()),

            $this->collection
                ->orderByTimestamp()
                ->ascending()
                ->pluckBytimestamp()
        );
    }

    public function testAssertInstanceOfFirstElementCollection()
    {
        $this->assertInstanceOf(
            \Holidays\Types\AllSoulsDay::class,
            $this->collection->first()
        );
    }

    public function testAssertInstanceOfLastElementCollection()
    {
        $this->assertInstanceOf(
            \Holidays\Types\TiradentesDay::class,
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

    public function testAssertEqualsFormatterDate()
    {
        $this->assertEquals(
            (new \Holidays\Types\NewYearsDay())->formatter(),
            $this->collection
                ->orderByTimestamp()
                ->descending()
                ->last()
                ->formatter()
        );
    }

    public function testAssertEqualsNextHolidayFormatter()
    {
        $this->assertEquals(
            (new \Holidays\Types\NewYearsDay())->next(),
            $this->collection
                ->orderByTimestamp()
                ->descending()
                ->last()
                ->next()
        );
    }

    public function testAssertEqualsPreviousHolidayFormatter()
    {
        $this->assertEquals(
            (new \Holidays\Types\NewYearsDay())->previous(),
            $this->collection
                ->orderByTimestamp()
                ->descending()
                ->last()
                ->previous()
        );
    }

    public function testExpectedExceptionDates()
    {
        $endDate = \DateTime::createFromFormat('d/m/Y', '01/01/2020')->setTime(0,0,0);
        $startDate = \DateTime::createFromFormat('d/m/Y', '30/06/2020')->setTime(23,59,59);

        $this->expectException(InvalidArgumentException::class);
        $this->collection
            ->between($startDate, $endDate)
            ->orderByTimestamp()
            ->ascending()
            ->getCollection();
    }

    public function testAssertEqualsCollectionFilterBetween()
    {
        $startDate = \DateTime::createFromFormat('d/m/Y', '01/01/2020')->setTime(0,0,0);
        $endDate = \DateTime::createFromFormat('d/m/Y', '30/06/2020')->setTime(23,59,59);

        $this->assertEquals(
            $this->expectedCollectionFilterBetween($startDate, $endDate),
            $this->collection
                ->between($startDate, $endDate)
                ->orderByTimestamp()
                ->ascending()
                ->getCollection()
        );
    }

    public function testAssertEqualsCollectionFilterNotBetween()
    {
        $startDate = \DateTime::createFromFormat('d/m/Y', '01/06/2020')->setTime(0,0,0);
        $endDate = \DateTime::createFromFormat('d/m/Y', '30/06/2020')->setTime(23,59,59);

        $this->assertEquals(
            $this->expectedCollectionFilterNotBetween($startDate, $endDate),
            $this->collection
                ->notBetween($startDate, $endDate)
                ->orderByTimestamp()
                ->ascending()
                ->getCollection()
        );
    }

    public function testAssertEqualsCollectionFilterLessThan()
    {
        $startDate = \DateTime::createFromFormat('d/m/Y', '01/06/2020')->setTime(0,0,0);

        $this->assertEquals(
            $this->expectedCollectionFilterLessThan($startDate),
            $this->collection
                ->lessThan($startDate)
                ->orderByTimestamp()
                ->ascending()
                ->getCollection()
        );
    }

    public function testAssertEqualsCollectionFilterLessThanEqual()
    {
        $startDate = \DateTime::createFromFormat('d/m/Y', '01/06/2020')->setTime(0,0,0);

        $this->assertEquals(
            $this->expectedCollectionFilterLessThan($startDate, true),
            $this->collection
                ->lessThanEqual($startDate)
                ->orderByTimestamp()
                ->ascending()
                ->getCollection()
        );
    }

    public function testAssertEqualsCollectionFilterGreaterThan()
    {
        $startDate = \DateTime::createFromFormat('d/m/Y', '01/11/2020')->setTime(0,0,0);

        $this->assertEquals(
            $this->expectedCollectionFilterGreaterThan($startDate),
            $this->collection
                ->greaterThan($startDate)
                ->orderByTimestamp()
                ->ascending()
                ->getCollection()
        );
    }

    public function testAssertEqualsCollectionFilterGreaterThanEqual()
    {
        $startDate = \DateTime::createFromFormat('d/m/Y', '01/11/2020')->setTime(0,0,0);

        $this->assertEquals(
            $this->expectedCollectionFilterGreaterThan($startDate, true),
            $this->collection
                ->greaterThanEqual($startDate)
                ->orderByTimestamp()
                ->ascending()
                ->getCollection()
        );
    }

    public function expectedCollectionDefault($year)
    {
        return [
            new \Holidays\Types\AllSoulsDay($year),
            new \Holidays\Types\Carnival($year),
            new \Holidays\Types\ChildrenDay($year),
            new \Holidays\Types\ChristmasDay($year),
            new \Holidays\Types\CorpusChrist($year),
            new \Holidays\Types\DecemberSolstice($year),
            new \Holidays\Types\EasterSunday($year),
            new \Holidays\Types\FatherDay($year),
            new \Holidays\Types\GoodFriday($year),
            new \Holidays\Types\IndependenceBrazil($year),
            new \Holidays\Types\JuneSolstice($year),
            new \Holidays\Types\LaborDay($year),
            new \Holidays\Types\MarchEquinox($year),
            new \Holidays\Types\MotherDay($year),
            new \Holidays\Types\NewYearsDay($year),
            new \Holidays\Types\OurLadyOfAparecida($year),
            new \Holidays\Types\RepublicProclamationDay($year),
            new \Holidays\Types\SeptemberEquinox($year),
            new \Holidays\Types\TiradentesDay($year),
        ];
    }

    public function expectedCollectionOrderByNameAscending()
    {
        $collection = $this->expectedCollectionDefault($this->getActualYear());

        usort($collection, function(\Holidays\Contract\Holiday $a, \Holidays\Contract\Holiday $b) {
            return $a->getName() > $b->getName();
        });

        return $collection;
    }

    public function expectedCollectionOrderByNameDescending()
    {
        $collection = $this->expectedCollectionDefault($this->getActualYear());

        usort($collection, function(\Holidays\Contract\Holiday $a, \Holidays\Contract\Holiday $b) {
            return $a->getName() < $b->getName();
        });

        return $collection;
    }

    public function expectedCollectionOrderByTimestampAscending()
    {
        $collection = $this->expectedCollectionDefault($this->getActualYear());

        usort($collection, function(\Holidays\Contract\Holiday $a, \Holidays\Contract\Holiday $b) {
            return $a->getTimestamp() > $b->getTimestamp();
        });

        return $collection;
    }

    public function expectedCollectionOrderByTimestampDescending()
    {
        $collection = $this->expectedCollectionDefault($this->getActualYear());

        usort($collection, function(\Holidays\Contract\Holiday $a, \Holidays\Contract\Holiday $b) {
            return $a->getTimestamp() < $b->getTimestamp();
        });

        return $collection;
    }

    public function expectedCollectionFilterBetween(\DateTimeInterface $startDate, \DateTimeInterface $endDate)
    {
        $collection = array_filter($this->expectedCollectionOrderByTimestampAscending(), function (\Holidays\Contract\Holiday $holiday) use ($startDate, $endDate) {
            return $holiday->getTimestamp() >= $startDate->getTimestamp() &&
                $holiday->getTimestamp() <= $endDate->getTimestamp();
        });

        return array_values($collection);
    }

    public function expectedCollectionFilterNotBetween(\DateTimeInterface $startDate, \DateTimeInterface $endDate)
    {
        $collection = array_filter($this->expectedCollectionOrderByTimestampAscending(), function (\Holidays\Contract\Holiday $holiday) use ($startDate, $endDate) {
            return $holiday->getTimestamp() < $startDate->getTimestamp() ||
                $holiday->getTimestamp() > $endDate->getTimestamp();
        });

        return array_values($collection);
    }

    public function expectedCollectionFilterLessThan(\DateTimeInterface $startDate, $equal = false)
    {
        $collection = array_filter($this->expectedCollectionOrderByTimestampAscending(), function (\Holidays\Contract\Holiday $holiday) use ($startDate, $equal) {
            if ($equal) {
                return $holiday->getTimestamp() <= $startDate->getTimestamp();
            }
            return $holiday->getTimestamp() < $startDate->getTimestamp();
        });

        return array_values($collection);
    }

    public function expectedCollectionFilterGreaterThan(\DateTimeInterface $startDate, $equal = false)
    {
        $collection = array_filter($this->expectedCollectionOrderByTimestampAscending(), function (\Holidays\Contract\Holiday $holiday) use ($startDate, $equal) {
            if ($equal) {
                return $holiday->getTimestamp() >= $startDate->getTimestamp();
            }
            return $holiday->getTimestamp() > $startDate->getTimestamp();
        });

        return array_values($collection);
    }

    public function getActualYear()
    {
        return $this->actualYear;
    }
}