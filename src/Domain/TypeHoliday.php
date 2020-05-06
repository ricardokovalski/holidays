<?php

namespace Holidays\Domain;

/**
 * Class TypeHoliday
 * @package Holidays\Domain
 */
class TypeHoliday extends EnumType
{
    const NATIONAL_HOLIDAY = 'national_holiday';

    const OPTIONAL_HOLIDAY = 'optional_holiday';

    const SEASON = 'season';

    /**
     * @param bool $readable
     * @return mixed
     */
    public static function all($readable = false)
    {
        return self::readable([
            self::NATIONAL_HOLIDAY => self::NATIONAL_HOLIDAY,
            self::OPTIONAL_HOLIDAY => self::OPTIONAL_HOLIDAY,
            self::SEASON => self::SEASON,
        ], $readable);
    }

}