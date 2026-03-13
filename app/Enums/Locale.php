<?php

declare(strict_types=1);

namespace App\Enums;

enum Locale: string
{
    case HUNGARIAN = 'hu';
    case ENGLISH = 'en';

    /**
     * Get all supported locale codes.
     *
     * @return array<int, string>
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
