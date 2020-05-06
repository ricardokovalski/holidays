<?php

namespace Holidays\Types;

/**
 * Class MarchEquinox
 * @package Holidays\Types
 */
class MarchEquinox extends AbstractHoliday
{
    /**
     * @return mixed|string
     */
    protected function name()
    {
        return "Equinócio de Outono";
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
        return strtotime("20 March {$this->getYear()}");
    }
}
