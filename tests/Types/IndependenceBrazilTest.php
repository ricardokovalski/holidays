<?php

class IndependenceBrazilTest extends \PHPUnit_Framework_TestCase
{
    public $year;

    public function setUp()
    {
        $this->year = date('Y');
    }

    public function testAssertEqualsPreviousIndependenceBrazil()
    {
        $previousYear = $this->year - 1;

        $independenceBrazil = current($this->expectedCollectionWithIndependenceBrazil($previousYear));

        $this->assertEquals(
            (new \Holidays\Types\IndependenceBrazil($previousYear))->previous(),
            $independenceBrazil->previous()
        );
    }

    public function testAssertEqualsNextIndependenceBrazil()
    {
        $nextYear = $this->year + 1;

        $independenceBrazil = current($this->expectedCollectionWithIndependenceBrazil($nextYear));

        $this->assertEquals(
            (new \Holidays\Types\IndependenceBrazil($nextYear))->next(),
            $independenceBrazil->next()
        );
    }

    public function testAssertEqualsFormatterDateIndependenceBrazil()
    {
        $independenceBrazil = current($this->expectedCollectionWithIndependenceBrazil($this->year));

        $this->assertEquals(
            (new \Holidays\Types\IndependenceBrazil($this->year))->formatter(),
            $independenceBrazil->formatter()
        );
    }

    public function expectedCollectionWithIndependenceBrazil($year)
    {
        return [
            new \Holidays\Types\IndependenceBrazil($year),
        ];
    }
}