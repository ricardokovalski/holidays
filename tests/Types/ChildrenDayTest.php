<?php

class ChildrenDayTest extends \PHPUnit_Framework_TestCase
{
    public $year;

    public function setUp()
    {
        $this->year = date('Y');
    }

    public function testAssertEqualsPreviousChildrenDay()
    {
        $previousYear = $this->year - 1;

        $childrenDay = current($this->expectedCollectionWithChildrenDay($previousYear));

        $this->assertEquals(
            (new \Holidays\Types\ChildrenDay($previousYear))->previous(),
            $childrenDay->previous()
        );
    }

    public function testAssertEqualsNextChildrenDay()
    {
        $nextYear = $this->year + 1;

        $childrenDay = current($this->expectedCollectionWithChildrenDay($nextYear));

        $this->assertEquals(
            (new \Holidays\Types\ChildrenDay($nextYear))->next(),
            $childrenDay->next()
        );
    }

    public function testAssertEqualsFormatterDateChildrenDay()
    {
        $childrenDay = current($this->expectedCollectionWithChildrenDay($this->year));

        $this->assertEquals(
            (new \Holidays\Types\ChildrenDay($this->year))->formatter(),
            $childrenDay->formatter()
        );
    }

    public function expectedCollectionWithChildrenDay($year)
    {
        return [
            new \Holidays\Types\ChildrenDay($year),
        ];
    }
}