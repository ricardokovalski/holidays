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
     * @return mixed|string
     */
    protected function type()
    {
        return \Holidays\Domain\TypeHoliday::NATIONAL;
    }

    /**
     * @return float|int|mixed
     * @throws \Exception
     */
    protected function timestamp()
    {
        return $this->getDateEaster($this->getYear()) - 2 * 86400;
    }

    /**
     * @param string $format
     * @return false|int|mixed|string
     * @throws \Exception
     */
    public function next($format = AbstractHoliday::FORMAT)
    {
        return date($format, $this->getDateEaster($this->getYear() + 1) - 2 * 86400);
    }

    /**
     * @param string $format
     * @return false|int|mixed|string
     * @throws \Exception
     */
    public function previous($format = AbstractHoliday::FORMAT)
    {
        return date($format, $this->getDateEaster($this->getYear() - 1) - 2 * 86400);
    }
}