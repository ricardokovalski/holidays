<?php

namespace Holidays\Types;

/**
 * Class JuneSolstice
 * @package Holidays\Types
 */
class JuneSolstice extends AbstractHoliday
{
    /**
     * @return mixed|string
     */
    protected function name()
    {
        return "Solstício de Inverno";
    }

    /**
     * @return false|mixed|string
     */
    protected function date()
    {
        return date($this->formatter(), $this->timestamp());
    }

    /**
     * @return bool|mixed
     */
    protected function national()
    {
        return false;
    }

    /**
     * @return mixed|string
     */
    protected function type()
    {
        return \Holidays\Domain\TypeHoliday::SEASON;
    }

    /**
     * @return false|int
     */
    public function timestamp()
    {
        return strtotime("20 June {$this->getYear()}");
    }
}
