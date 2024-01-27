<?php

namespace App\Enums;

enum Kelas: string
{
    case _7_ = '7';
    case _8_ = '8';
    case _9_ = '9';

    public static function create_kelas_dropdown(): array
    {
        return array_filter(self::cases(), fn ($v) => $v);
    }
}
