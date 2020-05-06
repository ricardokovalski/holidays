<?php

namespace Holidays\Types;

/**
 * Class CorpusChrist
 * @package Holidays\Types
 */
class CorpusChrist extends AbstractHoliday
{
    /**
     * @return mixed|string
     */
    protected function name()
    {
        return "CorpusChrist";
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
        return \Holidays\Domain\TypeHoliday::OPTIONAL_HOLIDAY;
    }

    /**
     * @return float|int
     */
    public function timestamp()
    {
        return $this->getDateEaster() + (60 * $this->getNumberSecondsFromOneDay());
    }
}