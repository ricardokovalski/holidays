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
        $carnival = current($this->expectedCollectionWithCarnival($this->year - 1));

        $this->assertEquals(
            (new \Holidays\Types\Carnival($this->year - 1))->previous(),
            $carnival->previous()
        );
    }

    public function testAssertEqualsNextCarnival()
    {
        $carnival = current($this->expectedCollectionWithCarnival($this->year - 1));

        $this->assertEquals(
            (new \Holidays\Types\Carnival($this->year - 1))->next(),
            $carnival->next()
        );
    }

    public function expectedCollectionWithCarnival($year)
    {
        return [
            new \Holidays\Types\Carnival($year),
        ];
    }
}