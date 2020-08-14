<?php

class ChristmasDayTest extends \PHPUnit_Framework_TestCase
{
    public $year;

    public function setUp()
    {
        $this->year = date('Y');
    }

    public function testAssertEqualsPreviousChristmasDay()
    {
        $previousYear = $this->year - 1;

        $christmasDay = current($this->expectedCollectionWithChristmasDay($previousYear));

        $this->assertEquals(
            (new \Holidays\Types\ChristmasDay($previousYear))->previous(),
            $christmasDay->previous()
        );
    }

    public function testAssertEqualsNextChristmasDay()
    {
        $nextYear = $this->year + 1;

        $christmasDay = current($this->expectedCollectionWithChristmasDay($nextYear));

        $this->assertEquals(
            (new \Holidays\Types\ChristmasDay($nextYear))->next(),
            $christmasDay->next()
        );
    }

    public function testAssertEqualsFormatterDateChristmasDay()
    {
        $christmasDay = current($this->expectedCollectionWithChristmasDay($this->year));

        $this->assertEquals(
            (new \Holidays\Types\ChristmasDay($this->year))->formatter(),
            $christmasDay->formatter()
        );
    }

    public function expectedCollectionWithChristmasDay($year)
    {
        return [
            new \Holidays\Types\ChristmasDay($year),
        ];
    }
}