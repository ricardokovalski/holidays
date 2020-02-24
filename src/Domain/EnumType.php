<?php

namespace Holidays\Domain;

/**
 * Class EnumType
 * @package Holidalys\Domain
 */
abstract class EnumType
{
    /**
     * @param $array
     * @param bool $readable
     * @return mixed
     */
    protected static function readable($array, $readable = false)
    {
        if ($readable) {
            foreach ($array as $key => &$value) {
                $value = strtolower($value);
            }
        }
        return $array;
    }
}
