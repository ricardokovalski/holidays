<?php

class CarnivalTest extends \PHPUnit_Framework_TestCase
{
    public $year;

    public function setUp()
    {
        $this->year = date('Y');
    }

    public function testAssertEqualsPreviousCarnival()
    {
        $previousYear = $this->year - 1;

        $carnival = current($this->expectedCollectionWithCarnival($previousYear));

        $this->assertEquals(
            (new \Holidays\Types\Carnival($previousYear))->previous(),
            $carnival->previous()
        );
    }

    public function testAssertEqualsNextCarnival()
    {
        $nextYear = $this->year + 1;

        $carnival = current($this->expectedCollectionWithCarnival($nextYear));

        $this->assertEquals(
            (new \Holidays\Types\Carnival($nextYear))->next(),
            $carnival->next()
        );
    }

    public function testAssertEqualsFormatterDateCarnival()
    {
        $carnival = current($this->expectedCollectionWithCarnival($this->year));

        $this->assertEquals(
            (new \Holidays\Types\Carnival($this->year))->formatter(),
            $carnival->formatter()
        );
    }

    public function expectedCollectionWithCarnival($year)
    {
        return [
            new \Holidays\Types\Carnival($year),
        ];
    }
}