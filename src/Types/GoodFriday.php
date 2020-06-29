<?php

namespace Holidays\Types;

/**
 * Class GoodFriday
 * @package Holidays\Types
 */
class GoodFriday extends AbstractEaster
{
    /**
     * GoodFriday constructor.
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
        return "Paixão de Cristo";
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
     * @return float|int
     */
    protected function timestamp($year)
    {
        return $this->getDateEaster($year) - (2 * $this->getNumberSecondsFromOneDay());
    }

    /**
     * @param string $format
     * @return false|int|mixed|string
     */
    public function next($format = AbstractHoliday::FORMAT)
    {
        $year = $this->getYear() ?: date('Y');
        return date($format, $this->getDateEaster($year + 1) - (2 * $this->getNumberSecondsFromOneDay()));
    }

    /**
     * @param string $format
     * @return false|int|mixed|string
     */
    public function previous($format = AbstractHoliday::FORMAT)
    {
        $year = $this->getYear() ?: date('Y');
        return date($format, $this->getDateEaster($year - 1) - (2 * $this->getNumberSecondsFromOneDay()));
    }
}