<?php

class JuneSolsticeTest extends \PHPUnit_Framework_TestCase
{
    public $year;

    public function setUp()
    {
        $this->year = date('Y');
    }

    public function testAssertEqualsPreviousJuneSolstice()
    {
        $previousYear = $this->year - 1;

        $juneSolstice = current($this->expectedCollectionWithJuneSolstice($previousYear));

        $this->assertEquals(
            (new \Holidays\Types\JuneSolstice($previousYear))->previous(),
            $juneSolstice->previous()
        );
    }

    public function testAssertEqualsNextJuneSolstice()
    {
        $nextYear = $this->year + 1;

        $juneSolstice = current($this->expectedCollectionWithJuneSolstice($nextYear));

        $this->assertEquals(
            (new \Holidays\Types\JuneSolstice($nextYear))->next(),
            $juneSolstice->next()
        );
    }

    public function testAssertEqualsFormatterDateJuneSolstice()
    {
        $juneSolstice = current($this->expectedCollectionWithJuneSolstice($this->year));

        $this->assertEquals(
            (new \Holidays\Types\JuneSolstice($this->year))->formatter(),
            $juneSolstice->formatter()
        );
    }

    public function expectedCollectionWithJuneSolstice($year)
    {
        return [
            new \Holidays\Types\JuneSolstice($year),
        ];
    }
}