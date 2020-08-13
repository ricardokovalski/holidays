<?php

class CorpusChristTest extends \PHPUnit_Framework_TestCase
{
    public $year;

    public function setUp()
    {
        $this->year = date('Y');
    }

    public function testAssertEqualsPreviousCorpusChrist()
    {
        $previousYear = $this->year - 1;

        $corpusChrist = current($this->expectedCollectionWithCorpusChrist($previousYear));

        $this->assertEquals(
            (new \Holidays\Types\CorpusChrist($previousYear))->previous(),
            $corpusChrist->previous()
        );
    }

    public function testAssertEqualsNextCorpusChrist()
    {
        $nextYear = $this->year + 1;

        $corpusChrist = current($this->expectedCollectionWithCorpusChrist($nextYear));

        $this->assertEquals(
            (new \Holidays\Types\CorpusChrist($nextYear))->next(),
            $corpusChrist->next()
        );
    }

    public function testAssertEqualsFormatterDateCorpusChrist()
    {
        $corpusChrist = current($this->expectedCollectionWithCorpusChrist($this->year));

        $this->assertEquals(
            (new \Holidays\Types\CorpusChrist($this->year))->formatter(),
            $corpusChrist->formatter()
        );
    }

    public function expectedCollectionWithCorpusChrist($year)
    {
        return [
            new \Holidays\Types\CorpusChrist($year),
        ];
    }
}