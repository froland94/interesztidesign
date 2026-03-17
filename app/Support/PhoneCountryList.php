<?php

declare(strict_types=1);

namespace App\Support;

use libphonenumber\PhoneNumberUtil;

class PhoneCountryList
{
    /**
     * @return array<int, array{region: string, name: string, dial_code: string, flag: string}>
     */
    public static function all(string $locale = 'hu'): array
    {
        $phoneUtil = PhoneNumberUtil::getInstance();
        $regions = $phoneUtil->getSupportedRegions();

        $countries = [];

        foreach ($regions as $region) {
            $dialCode = $phoneUtil->getCountryCodeForRegion($region);
            $name = \Locale::getDisplayRegion("_{$region}", $locale);
            $flag = self::regionToFlag($region);

            $countries[] = [
                'region' => $region,
                'name' => $name,
                'dial_code' => "+{$dialCode}",
                'flag' => $flag,
            ];
        }

        usort($countries, function (array $a, array $b): int {
            if ($a['region'] === 'HU') {
                return -1;
            }
            if ($b['region'] === 'HU') {
                return 1;
            }

            return strcmp($a['name'], $b['name']);
        });

        return $countries;
    }

    private static function regionToFlag(string $region): string
    {
        $offset = 127397;
        $flag = '';

        foreach (str_split($region) as $char) {
            $flag .= mb_chr(ord($char) + $offset);
        }

        return $flag;
    }
}
