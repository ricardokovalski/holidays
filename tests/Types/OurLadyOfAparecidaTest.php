<?php

class OurLadyOfAparecidaTest extends \PHPUnit_Framework_TestCase
{
    public $year;

    public function setUp()
    {
        $this->year = date('Y');
    }

    public function testAssertEqualsPreviousOurLadyOfAparecida()
    {
        $previousYear = $this->year - 1;

        $ourLadyOfAparecida = current($this->expectedCollectionWithOurLadyOfAparecida($previousYear));

        $this->assertEquals(
            (new \Holidays\Types\OurLadyOfAparecida($previousYear))->previous(),
            $ourLadyOfAparecida->previous()
        );
    }

    public function testAssertEqualsNextOurLadyOfAparecida()
    {
        $nextYear = $this->year + 1;

        $ourLadyOfAparecida = current($this->expectedCollectionWithOurLadyOfAparecida($nextYear));

        $this->assertEquals(
            (new \Holidays\Types\OurLadyOfAparecida($nextYear))->next(),
            $ourLadyOfAparecida->next()
        );
    }

    public function testAssertEqualsFormatterDateOurLadyOfAparecida()
    {
        $ourLadyOfAparecida = current($this->expectedCollectionWithOurLadyOfAparecida($this->year));

        $this->assertEquals(
            (new \Holidays\Types\OurLadyOfAparecida($this->year))->formatter(),
            $ourLadyOfAparecida->formatter()
        );
    }

    public function expectedCollectionWithOurLadyOfAparecida($year)
    {
        return [
            new \Holidays\Types\OurLadyOfAparecida($year),
        ];
    }
}