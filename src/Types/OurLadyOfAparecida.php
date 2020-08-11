<?php

namespace Holidays\Types;

/**
 * Class OurLadyOfAparecida
 * @package Holidays\Types
 */
class OurLadyOfAparecida extends AbstractHoliday
{
    /**
     * OurLadyOfAparecida constructor.
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
     * @return mixed|string
     */
    protected function type()
    {
        return \Holidays\Domain\TypeHoliday::NATIONAL;
    }

    /**
     * @return false|int|mixed
     */
    protected function timestamp()
    {
        return strtotime("12 October {$this->getYear()}");
    }
}
