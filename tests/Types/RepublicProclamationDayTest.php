<?php

class RepublicProclamationDayTest extends \PHPUnit_Framework_TestCase
{
    public $year;

    public function setUp()
    {
        $this->year = date('Y');
    }

    public function testAssertEqualsPreviousRepublicProclamationDay()
    {
        $previousYear = $this->year - 1;

        $republicProclamationDay = current($this->expectedCollectionWithRepublicProclamationDay($previousYear));

        $this->assertEquals(
            (new \Holidays\Types\RepublicProclamationDay($previousYear))->previous(),
            $republicProclamationDay->previous()
        );
    }

    public function testAssertEqualsNextRepublicProclamationDay()
    {
        $nextYear = $this->year + 1;

        $republicProclamationDay = current($this->expectedCollectionWithRepublicProclamationDay($nextYear));

        $this->assertEquals(
            (new \Holidays\Types\RepublicProclamationDay($nextYear))->next(),
            $republicProclamationDay->next()
        );
    }

    public function testAssertEqualsFormatterDateRepublicProclamationDay()
    {
        $republicProclamationDay = current($this->expectedCollectionWithRepublicProclamationDay($this->year));

        $this->assertEquals(
            (new \Holidays\Types\RepublicProclamationDay($this->year))->formatter(),
            $republicProclamationDay->formatter()
        );
    }

    public function expectedCollectionWithRepublicProclamationDay($year)
    {
        return [
            new \Holidays\Types\RepublicProclamationDay($year),
        ];
    }
}