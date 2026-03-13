<?php

declare(strict_types=1);

return [

    'supportedLocales' => [
        'hu' => [
            'name' => 'Hungarian',
            'script' => 'Latn',
            'native' => 'magyar',
            'regional' => 'hu_HU',
        ],
        'en' => [
            'name' => 'English',
            'script' => 'Latn',
            'native' => 'English',
            'regional' => 'en_GB',
        ],
    ],

    'useAcceptLanguageHeader' => true,

    'hideDefaultLocaleInURL' => true,

    'localesOrder' => [],

    'localesMapping' => [],

    'utf8suffix' => env('LARAVELLOCALIZATION_UTF8SUFFIX', '.UTF-8'),

    'urlsIgnored' => ['/skipped'],

    'httpMethodsIgnored' => ['POST', 'PUT', 'PATCH', 'DELETE'],
];
