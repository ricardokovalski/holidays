<?php

class LaborDayTest extends \PHPUnit_Framework_TestCase
{
    public $year;

    public function setUp()
    {
        $this->year = date('Y');
    }

    public function testAssertEqualsPreviousLaborDay()
    {
        $previousYear = $this->year - 1;

        $laborDay = current($this->expectedCollectionWithLaborDay($previousYear));

        $this->assertEquals(
            (new \Holidays\Types\LaborDay($previousYear))->previous(),
            $laborDay->previous()
        );
    }

    public function testAssertEqualsNextLaborDay()
    {
        $nextYear = $this->year + 1;

        $laborDay = current($this->expectedCollectionWithLaborDay($nextYear));

        $this->assertEquals(
            (new \Holidays\Types\LaborDay($nextYear))->next(),
            $laborDay->next()
        );
    }

    public function testAssertEqualsFormatterDateLaborDay()
    {
        $laborDay = current($this->expectedCollectionWithLaborDay($this->year));

        $this->assertEquals(
            (new \Holidays\Types\LaborDay($this->year))->formatter(),
            $laborDay->formatter()
        );
    }

    public function expectedCollectionWithLaborDay($year)
    {
        return [
            new \Holidays\Types\LaborDay($year),
        ];
    }
}