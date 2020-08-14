<?php

class AllSoulsDayTest extends \PHPUnit_Framework_TestCase
{
    public $year;

    public function setUp()
    {
        $this->year = date('Y');
    }

    public function testAssertEqualsPreviousAllSoulsDay()
    {
        $previousYear = $this->year - 1;

        $allSoulsDay = current($this->expectedCollectionWithAllSoulsDay($previousYear));

        $this->assertEquals(
            (new \Holidays\Types\AllSoulsDay($previousYear))->previous(),
            $allSoulsDay->previous()
        );
    }

    public function testAssertEqualsNextAllSoulsDay()
    {
        $nextYear = $this->year + 1;

        $allSoulsDay = current($this->expectedCollectionWithAllSoulsDay($nextYear));

        $this->assertEquals(
            (new \Holidays\Types\AllSoulsDay($nextYear))->next(),
            $allSoulsDay->next()
        );
    }

    public function testAssertEqualsFormatterDateAllSoulsDay()
    {
        $allSoulsDay = current($this->expectedCollectionWithAllSoulsDay($this->year));

        $this->assertEquals(
            (new \Holidays\Types\AllSoulsDay($this->year))->formatter(),
            $allSoulsDay->formatter()
        );
    }

    public function expectedCollectionWithAllSoulsDay($year)
    {
        return [
            new \Holidays\Types\AllSoulsDay($year),
        ];
    }
}