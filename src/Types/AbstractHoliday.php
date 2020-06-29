<?php

namespace Holidays\Types;

use Holidays\Contract\Holiday;

/**
 * Class AbstractHoliday
 * @package Holidays\Types
 */
abstract class AbstractHoliday implements Holiday
{
    const FORMAT = 'Y-m-d';

    /**
     * @var $name
     */
    protected $name;

    /**
     * @var $isNational
     */
    protected $isNational;

    /**
     * @var $type
     */
    protected $type;

    /**
     * @var $timestamp
     */
    protected $timestamp;

    /**
     * @var $year
     */
    private $year;

    /**
     * AbstractHoliday constructor.
     * @param $year
     */
    public function __construct($year = null)
    {
        $this->year = $year;
        $this->makeName();
        $this->makeNational();
        $this->makeType();
        $this->makeTimestamp($year);
    }

    /**
     * @return mixed
     */
    abstract protected function name();

    /**
     * @return mixed
     */
    abstract protected function national();

    /**
     * @return mixed
     */
    abstract protected function type();

    /**
     * @param $year
     * @return mixed
     */
    abstract protected function timestamp($year);

    /**
     * @return mixed
     */
    protected function makeName()
    {
        return $this->name = $this->name();
    }

    /**
     * @return mixed
     */
    protected function makeNational()
    {
        return $this->isNational = $this->national();
    }

    /**
     * @return mixed
     */
    protected function makeType()
    {
        return $this->type = $this->type();
    }

    /**
     * @param $year
     * @return mixed
     */
    protected function makeTimestamp($year)
    {
        return $this->timestamp = $this->timestamp($year);
    }

    /**
     * @param $format
     * @return mixed|string
     */
    public function formatter($format = self::FORMAT)
    {
        return date($format, $this->getTimestamp());
    }

    /**
     * @param string $format
     * @return false|int|mixed
     */
    public function next($format = self::FORMAT)
    {
        return date($format, strtotime('+ 1 Years', $this->getTimestamp()));
    }

    /**
     * @param string $format
     * @return false|int|mixed|string
     */
    public function previous($format = self::FORMAT)
    {
        return date($format, strtotime('- 1 Years', $this->getTimestamp()));
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function isNational()
    {
        return $this->isNational;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @return int|null
     */
    public function getYear()
    {
        return $this->year;
    }
}