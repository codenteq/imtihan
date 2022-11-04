<?php

namespace App\Helper;

class Helper
{
    public static function userInfo()
    {
        return cache()->remember('info', 60 * 60 * 24, function () {
            return auth()->user()->info;
        });
    }
}
