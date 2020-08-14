<?php

class NewYearsDayTest extends \PHPUnit_Framework_TestCase
{
    public $year;

    public function setUp()
    {
        $this->year = date('Y');
    }

    public function testAssertEqualsPreviousNewYearsDay()
    {
        $previousYear = $this->year - 1;

        $newYearsDay = current($this->expectedCollectionWithNewYearsDay($previousYear));

        $this->assertEquals(
            (new \Holidays\Types\NewYearsDay($previousYear))->previous(),
            $newYearsDay->previous()
        );
    }

    public function testAssertEqualsNextNewYearsDay()
    {
        $nextYear = $this->year + 1;

        $newYearsDay = current($this->expectedCollectionWithNewYearsDay($nextYear));

        $this->assertEquals(
            (new \Holidays\Types\NewYearsDay($nextYear))->next(),
            $newYearsDay->next()
        );
    }

    public function testAssertEqualsFormatterDateNewYearsDay()
    {
        $newYearsDay = current($this->expectedCollectionWithNewYearsDay($this->year));

        $this->assertEquals(
            (new \Holidays\Types\NewYearsDay($this->year))->formatter(),
            $newYearsDay->formatter()
        );
    }

    public function expectedCollectionWithNewYearsDay($year)
    {
        return [
            new \Holidays\Types\NewYearsDay($year),
        ];
    }
}