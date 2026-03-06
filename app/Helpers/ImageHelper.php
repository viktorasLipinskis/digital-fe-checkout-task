<?php

namespace App\Helpers;

class ImageHelper
{
    private static array $handleMap = [
        '@dana90s'        => 'dana.png',
        '@adh990'         => 'ashley.png',
        '@Rollo_jims8544' => 'jim.png',
    ];

    public static function userAvatar(string $handle): string
    {
        $filename = self::$handleMap[$handle] ?? 'default.png';

        return asset('images/users/' . $filename);
    }
}
