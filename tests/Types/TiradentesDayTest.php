<?php

class TiradentesDayTest extends \PHPUnit_Framework_TestCase
{
    public $year;

    public function setUp()
    {
        $this->year = date('Y');
    }

    public function testAssertEqualsPreviousTiradentesDay()
    {
        $previousYear = $this->year - 1;

        $tirandentesDay = current($this->expectedCollectionWithTiradentesDay($previousYear));

        $this->assertEquals(
            (new \Holidays\Types\TiradentesDay($previousYear))->previous(),
            $tirandentesDay->previous()
        );
    }

    public function testAssertEqualsNextTiradentesDay()
    {
        $nextYear = $this->year + 1;

        $tirandentesDay = current($this->expectedCollectionWithTiradentesDay($nextYear));

        $this->assertEquals(
            (new \Holidays\Types\TiradentesDay($nextYear))->next(),
            $tirandentesDay->next()
        );
    }

    public function testAssertEqualsFormatterDateTiradentesDay()
    {
        $tirandentesDay = current($this->expectedCollectionWithTiradentesDay($this->year));

        $this->assertEquals(
            (new \Holidays\Types\TiradentesDay($this->year))->formatter(),
            $tirandentesDay->formatter()
        );
    }

    public function expectedCollectionWithTiradentesDay($year)
    {
        return [
            new \Holidays\Types\TiradentesDay($year),
        ];
    }
}