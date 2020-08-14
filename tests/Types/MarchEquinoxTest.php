<?php

class MarchEquinoxTest extends \PHPUnit_Framework_TestCase
{
    public $year;

    public function setUp()
    {
        $this->year = date('Y');
    }

    public function testAssertEqualsPreviousMarchEquinox()
    {
        $previousYear = $this->year - 1;

        $marchEquinox = current($this->expectedCollectionWithMarchEquinox($previousYear));

        $this->assertEquals(
            (new \Holidays\Types\MarchEquinox($previousYear))->previous(),
            $marchEquinox->previous()
        );
    }

    public function testAssertEqualsNextMarchEquinox()
    {
        $nextYear = $this->year + 1;

        $marchEquinox = current($this->expectedCollectionWithMarchEquinox($nextYear));

        $this->assertEquals(
            (new \Holidays\Types\MarchEquinox($nextYear))->next(),
            $marchEquinox->next()
        );
    }

    public function testAssertEqualsFormatterDateMarchEquinox()
    {
        $marchEquinox = current($this->expectedCollectionWithMarchEquinox($this->year));

        $this->assertEquals(
            (new \Holidays\Types\MarchEquinox($this->year))->formatter(),
            $marchEquinox->formatter()
        );
    }

    public function expectedCollectionWithMarchEquinox($year)
    {
        return [
            new \Holidays\Types\MarchEquinox($year),
        ];
    }
}