<?php

namespace Holidays\Types;

/**
 * Class EasterSunday
 * @package Holidays\Types
 */
class EasterSunday extends AbstractEaster
{
    /**
     * EasterSunday constructor.
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
        return "Páscoa";
    }

    /**
     * @return mixed|string
     */
    protected function type()
    {
        return \Holidays\Domain\TypeHoliday::NATIONAL;
    }

    /**
     * @return int|mixed
     * @throws \Exception
     */
    protected function timestamp()
    {
        return $this->getDateEaster($this->getYear());
    }

    /**
     * @param string $format
     * @return false|int|mixed|string
     * @throws \Exception
     */
    public function next($format = AbstractHoliday::FORMAT)
    {
        return date($format, $this->getDateEaster($this->getYear() + 1));
    }

    /**
     * @param string $format
     * @return false|int|mixed|string
     * @throws \Exception
     */
    public function previous($format = AbstractHoliday::FORMAT)
    {
        return date($format, $this->getDateEaster($this->getYear() - 1));
    }
}