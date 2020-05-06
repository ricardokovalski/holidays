<?php

namespace Holidays\Types;

/**
 * Class DecemberSolstice
 * @package Holidays\Types
 */
class DecemberSolstice extends AbstractHoliday
{
    /**
     * @return mixed|string
     */
    protected function name()
    {
        return "Solstício de Verão";
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
        return strtotime("21 December {$this->getYear()}");
    }
}
