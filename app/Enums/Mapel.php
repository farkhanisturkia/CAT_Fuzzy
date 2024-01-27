<?php

namespace App\Enums;

enum Mapel: string
{
    case Matematika = '1';
    case Ipa = '2';
    case Ips = '3';

    public static function create_mapel_dropdown(): array
    {
        return array_filter(self::cases(), fn ($v) => $v);
    }
}
