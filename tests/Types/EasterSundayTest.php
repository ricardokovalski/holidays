<?php

class EasterSundayTest extends \PHPUnit_Framework_TestCase
{
    public $year;

    public function setUp()
    {
        $this->year = date('Y');
    }

    public function testAssertEqualsPreviousEasterSunday()
    {
        $previousYear = $this->year - 1;

        $easterSunday = current($this->expectedCollectionWithEasterSunday($previousYear));

        $this->assertEquals(
            (new \Holidays\Types\EasterSunday($previousYear))->previous(),
            $easterSunday->previous()
        );
    }

    public function testAssertEqualsNextEasterSunday()
    {
        $nextYear = $this->year + 1;

        $easterSunday = current($this->expectedCollectionWithEasterSunday($nextYear));

        $this->assertEquals(
            (new \Holidays\Types\EasterSunday($nextYear))->next(),
            $easterSunday->next()
        );
    }

    public function testAssertEqualsFormatterDateEasterSunday()
    {
        $easterSunday = current($this->expectedCollectionWithEasterSunday($this->year));

        $this->assertEquals(
            (new \Holidays\Types\EasterSunday($this->year))->formatter(),
            $easterSunday->formatter()
        );
    }

    public function expectedCollectionWithEasterSunday($year)
    {
        return [
            new \Holidays\Types\EasterSunday($year),
        ];
    }
}