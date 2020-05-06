<?php

namespace Holidays\Contract;

/**
 * Interface Holiday
 * @package Holidays\Contract
 */
interface Holiday
{
    /**
     * @return mixed
     */
    public function formatter();

    /**
     * @return mixed
     */
    public function getName();

    /**
     * @return mixed
     */
    public function getDate();

    /**
     * @return mixed
     */
    public function isNational();

    /**
     * @return mixed
     */
    public function getType();
}