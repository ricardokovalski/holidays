<?php

class SeptemberEquinoxTest extends \PHPUnit_Framework_TestCase
{
    public $year;

    public function setUp()
    {
        $this->year = date('Y');
    }

    public function testAssertEqualsPreviousSeptemberEquinox()
    {
        $previousYear = $this->year - 1;

        $septemberEquinox = current($this->expectedCollectionWithSeptemberEquinox($previousYear));

        $this->assertEquals(
            (new \Holidays\Types\SeptemberEquinox($previousYear))->previous(),
            $septemberEquinox->previous()
        );
    }

    public function testAssertEqualsNextSeptemberEquinox()
    {
        $nextYear = $this->year + 1;

        $septemberEquinox = current($this->expectedCollectionWithSeptemberEquinox($nextYear));

        $this->assertEquals(
            (new \Holidays\Types\SeptemberEquinox($nextYear))->next(),
            $septemberEquinox->next()
        );
    }

    public function testAssertEqualsFormatterDateSeptemberEquinox()
    {
        $septemberEquinox = current($this->expectedCollectionWithSeptemberEquinox($this->year));

        $this->assertEquals(
            (new \Holidays\Types\SeptemberEquinox($this->year))->formatter(),
            $septemberEquinox->formatter()
        );
    }

    public function expectedCollectionWithSeptemberEquinox($year)
    {
        return [
            new \Holidays\Types\SeptemberEquinox($year),
        ];
    }
}