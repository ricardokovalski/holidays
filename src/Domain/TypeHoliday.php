<?php

namespace Holidays\Domain;

class TypeHoliday extends EnumType
{
    const NATIONAL_HOLIDAY = 'national_holiday';

    const OPTIONAL_HOLIDAY = 'optional_holiday';

    const SEASON = 'season';

    public static function all($readable = false)
    {
        return self::readable([
            self::NATIONAL_HOLIDAY => self::NATIONAL_HOLIDAY,
            self::OPTIONAL_HOLIDAY => self::OPTIONAL_HOLIDAY,
            self::SEASON => self::SEASON,
        ], $readable);
    }

}