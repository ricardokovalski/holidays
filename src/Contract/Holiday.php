<?php

namespace Holidays\Contract;

interface Holiday
{
    public function formatter();

    public function getName();

    public function getDate();

    public function isNational();

    public function getType();
}