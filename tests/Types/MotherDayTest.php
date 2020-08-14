<?php

class MotherDayTest extends \PHPUnit_Framework_TestCase
{
    public $year;

    public function setUp()
    {
        $this->year = date('Y');
    }

    public function testAssertEqualsPreviousMotherDay()
    {
        $previousYear = $this->year - 1;

        $motherDay = current($this->expectedCollectionWithMotherDay($previousYear));

        $this->assertEquals(
            (new \Holidays\Types\MotherDay($previousYear))->previous(),
            $motherDay->previous()
        );
    }

    public function testAssertEqualsNextMotherDay()
    {
        $nextYear = $this->year + 1;

        $motherDay = current($this->expectedCollectionWithMotherDay($nextYear));

        $this->assertEquals(
            (new \Holidays\Types\MotherDay($nextYear))->next(),
            $motherDay->next()
        );
    }

    public function testAssertEqualsFormatterDateMotherDay()
    {
        $motherDay = current($this->expectedCollectionWithMotherDay($this->year));

        $this->assertEquals(
            (new \Holidays\Types\MotherDay($this->year))->formatter(),
            $motherDay->formatter()
        );
    }

    public function expectedCollectionWithMotherDay($year)
    {
        return [
            new \Holidays\Types\MotherDay($year),
        ];
    }
}