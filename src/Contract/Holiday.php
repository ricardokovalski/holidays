<?php

namespace Holidays\Contract;

/**
 * Interface Holiday
 * @package Holidays\Contract
 */
interface Holiday
{
    /**
     * @param $format
     * @return mixed
     */
    public function formatter($format);

    /**
     * @return mixed
     */
    public function getName();

    /**
     * @return mixed
     */
    public function isNational();

    /**
     * @return mixed
     */
    public function getType();

    /**
     * @return mixed
     */
    public function getTimestamp();
}