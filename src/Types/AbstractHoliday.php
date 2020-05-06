<?php

namespace Holidays\Types;

use Holidays\Contract\Holiday;

/**
 * Class AbstractHoliday
 * @package Holidays\Types
 */
abstract class AbstractHoliday implements Holiday
{
    /**
     * @var $name
     */
    protected $name;

    /**
     * @var $date
     */
    protected $date;

    /**
     * @var $isNational
     */
    protected $isNational;

    /**
     * @var $type
     */
    protected $type;

    /**
     * AbstractHoliday constructor.
     */
    public function __construct()
    {
        $this->makeName();
        $this->makeDate();
        $this->makeNational();
        $this->makeType();
    }

    /**
     * @return mixed
     */
    abstract protected function name();

    /**
     * @return mixed
     */
    abstract protected function date();

    /**
     * @return mixed
     */
    abstract protected function national();

    /**
     * @return mixed
     */
    abstract protected function type();

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
    protected function makeDate()
    {
        return $this->date = $this->date();
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
     * @return mixed|string
     */
    public function formatter()
    {
        return "Y-m-d";
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
    public function getDate()
    {
        return $this->date;
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
     * @return false|string
     */
    public function getYear()
    {
        return date("Y");
    }

    /**
     * @return float|int
     */
    protected function getNumberSecondsFromOneDay()
    {
        return 60*60*24;
    }

    /**
     * @return int
     */
    protected function getDateEaster()
    {
        return easter_date();
    }
}