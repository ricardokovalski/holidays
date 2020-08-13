<?php

class GoodFridayTest extends \PHPUnit_Framework_TestCase
{
    public $year;

    public function setUp()
    {
        $this->year = date('Y');
    }

    public function testAssertEqualsPreviousGoodFriday()
    {
        $previousYear = $this->year - 1;

        $goodFriday = current($this->expectedCollectionWithGoodFriday($previousYear));

        $this->assertEquals(
            (new \Holidays\Types\GoodFriday($previousYear))->previous(),
            $goodFriday->previous()
        );
    }

    public function testAssertEqualsNextGoodFriday()
    {
        $nextYear = $this->year + 1;

        $goodFriday = current($this->expectedCollectionWithGoodFriday($nextYear));

        $this->assertEquals(
            (new \Holidays\Types\GoodFriday($nextYear))->next(),
            $goodFriday->next()
        );
    }

    public function testAssertEqualsFormatterDateGoodFriday()
    {
        $goodFriday = current($this->expectedCollectionWithGoodFriday($this->year));

        $this->assertEquals(
            (new \Holidays\Types\GoodFriday($this->year))->formatter(),
            $goodFriday->formatter()
        );
    }

    public function expectedCollectionWithGoodFriday($year)
    {
        return [
            new \Holidays\Types\GoodFriday($year),
        ];
    }
}