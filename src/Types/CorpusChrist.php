<?php

namespace Holidays\Types;

/**
 * Class CorpusChrist
 * @package Holidays\Types
 */
class CorpusChrist extends AbstractEaster
{
    /**
     * CorpusChrist constructor.
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
        return "CorpusChrist";
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
     * @param $year
     * @return float|int
     */
    protected function timestamp($year)
    {
        return $this->getDateEaster($year) + (60 * $this->getNumberSecondsFromOneDay());
    }

    /**
     * @param string $format
     * @return false|int|mixed|string
     */
    public function next($format = AbstractHoliday::FORMAT)
    {
        $year = $this->getYear() ?: date('Y');
        return date($format, $this->getDateEaster($year + 1) + (60 * $this->getNumberSecondsFromOneDay()));
    }

    /**
     * @param string $format
     * @return false|int|mixed|string
     */
    public function previous($format = AbstractHoliday::FORMAT)
    {
        $year = $this->getYear() ?: date('Y');
        return date($format, $this->getDateEaster($year - 1) + (60 * $this->getNumberSecondsFromOneDay()));
    }
}