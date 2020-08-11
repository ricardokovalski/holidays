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
     * @return mixed|string
     */
    protected function type()
    {
        return \Holidays\Domain\TypeHoliday::OPTIONAL;
    }

    /**
     * @return float|int|mixed
     * @throws \Exception
     */
    protected function timestamp()
    {
        return $this->getDateEaster($this->getYear()) + 60 * 86400;
    }

    /**
     * @param string $format
     * @return false|int|mixed|string
     * @throws \Exception
     */
    public function next($format = AbstractHoliday::FORMAT)
    {
        return date($format, $this->getDateEaster($this->getYear() + 1) + 60 * 86400);
    }

    /**
     * @param string $format
     * @return false|int|mixed|string
     * @throws \Exception
     */
    public function previous($format = AbstractHoliday::FORMAT)
    {
        return date($format, $this->getDateEaster($this->getYear() - 1) + 60 * 86400);
    }
}