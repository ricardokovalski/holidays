<?php

namespace Holidays\Helper;

class Helper
{
    public static function dateUnformatted($string)
    {
        return preg_replace("/(\d{4})(\d{2})(\d{2})/", "\$1-\$2-\$3", $string);
    }
}