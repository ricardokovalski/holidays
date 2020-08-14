<?php

class DecemberSolsticeTest extends \PHPUnit_Framework_TestCase
{
    public $year;

    public function setUp()
    {
        $this->year = date('Y');
    }

    public function testAssertEqualsPreviousDecemberSolstice()
    {
        $previousYear = $this->year - 1;

        $decemberSolstice = current($this->expectedCollectionWithDecemberSolstice($previousYear));

        $this->assertEquals(
            (new \Holidays\Types\DecemberSolstice($previousYear))->previous(),
            $decemberSolstice->previous()
        );
    }

    public function testAssertEqualsNextDecemberSolstice()
    {
        $nextYear = $this->year + 1;

        $decemberSolstice = current($this->expectedCollectionWithDecemberSolstice($nextYear));

        $this->assertEquals(
            (new \Holidays\Types\DecemberSolstice($nextYear))->next(),
            $decemberSolstice->next()
        );
    }

    public function testAssertEqualsFormatterDateDecemberSolstice()
    {
        $decemberSolstice = current($this->expectedCollectionWithDecemberSolstice($this->year));

        $this->assertEquals(
            (new \Holidays\Types\DecemberSolstice($this->year))->formatter(),
            $decemberSolstice->formatter()
        );
    }

    public function expectedCollectionWithDecemberSolstice($year)
    {
        return [
            new \Holidays\Types\DecemberSolstice($year),
        ];
    }
}