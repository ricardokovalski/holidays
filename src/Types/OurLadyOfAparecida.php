<?php

namespace Holidays\Types;

/**
 * Class OurLadyOfAparecida
 * @package Holidays\Types
 */
class OurLadyOfAparecida extends AbstractHoliday
{
    /**
     * AllSoulsDay constructor.
     * @param null $year
     */
    public function __construct($year = null)
    {
        parent::__construct($year);
    }

    /**
     * @return mixed|string
     */
    protected function name()
    {
        return "Nossa Senhora Aparecida";
    }

    /**
     * @return bool|mixed
     */
    protected function national()
    {
        return true;
    }

    /**
     * @return mixed|string
     */
    protected function type()
    {
        return \Holidays\Domain\TypeHoliday::NATIONAL_HOLIDAY;
    }

    /**
     * @param $year
     * @return false|int|mixed
     */
    protected function timestamp($year)
    {
        $year = $year ?: date('Y');
        return strtotime("12 October {$year}");
    }
}
