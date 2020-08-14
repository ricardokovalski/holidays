<?php

class FatherDayTest extends \PHPUnit_Framework_TestCase
{
    public $year;

    public function setUp()
    {
        $this->year = date('Y');
    }

    public function testAssertEqualsPreviousFatherDay()
    {
        $previousYear = $this->year - 1;

        $fatherDay = current($this->expectedCollectionWithFatherDay($previousYear));

        $this->assertEquals(
            (new \Holidays\Types\FatherDay($previousYear))->previous(),
            $fatherDay->previous()
        );
    }

    public function testAssertEqualsNextFatherDay()
    {
        $nextYear = $this->year + 1;

        $fatherDay = current($this->expectedCollectionWithFatherDay($nextYear));

        $this->assertEquals(
            (new \Holidays\Types\FatherDay($nextYear))->next(),
            $fatherDay->next()
        );
    }

    public function testAssertEqualsFormatterDateFatherDay()
    {
        $fatherDay = current($this->expectedCollectionWithFatherDay($this->year));

        $this->assertEquals(
            (new \Holidays\Types\FatherDay($this->year))->formatter(),
            $fatherDay->formatter()
        );
    }

    public function expectedCollectionWithFatherDay($year)
    {
        return [
            new \Holidays\Types\FatherDay($year),
        ];
    }
}