<?php

return [
    'navigation' => [
        'group' => 'Rendszer',
        'label' => 'Környezeti változók (.env)',
    ],

    'page' => [
        'title' => 'Környezeti változók (.env)',
    ],
    'tabs' => [
        'current-env' => [
            'title' => 'Aktuális .env',
        ],
        'backups' => [
            'title' => 'Mentések',
        ],
    ],
    'actions' => [
        'add' => [
            'title' => 'Új bejegyzés',
            'modalHeading' => 'Új bejegyzés hozzáadása',
            'success' => [
                'title' => 'A(z) ":Name" kulcs sikeresen elmentve',
            ],
            'form' => [
                'fields' => [
                    'key' => 'Kulcs',
                    'value' => 'Érték',
                    'index' => 'Beszúrás létező kulcs után (opcionális)',
                ],
                'helpText' => [
                    'index' => 'Ha egy konkrét létező kulcs után szeretnéd beszúrni az újat, itt kiválaszthatod',
                ],
            ],
        ],
        'edit' => [
            'tooltip' => '":name" szerkesztése',
            'modal' => [
                'text' => 'Bejegyzés szerkesztése',
            ],
        ],
        'delete' => [
            'tooltip' => '":name" eltávolítása',
            'confirm' => [
                'title' => 'Biztosan törölni szeretnéd a(z) ":name" bejegyzést? Ez a művelet nem vonható vissza.',
            ],
        ],
        'clear-cache' => [
            'title' => 'Cache ürítése',
            'tooltip' => 'A Laravel néha gyorsítótárazza az ENV változókat. Kattints ide a cache ürítéséhez ("artisan optimize:clear"), hogy az új értékek érvénybe lépjenek.',
        ],

        'backup' => [
            'title' => 'Új mentés létrehozása',
            'success' => [
                'title' => 'A mentés sikeresen elkészült',
            ],
        ],
        'download' => [
            'title' => 'Aktuális .env letöltése',
            'tooltip' => '":name" mentés letöltése',
        ],
        'upload-backup' => [
            'title' => 'Mentés feltöltése',
        ],
        'show-content' => [
            'modalHeading' => '":name" mentés nyers tartalma',
            'tooltip' => 'Nyers tartalom megjelenítése',
        ],
        'restore-backup' => [
            'confirm' => [
                'title' => 'Vissza fogod állítani a(z) ":name" mentést a jelenlegi ".env" fájl helyére. Biztos vagy benne?',
            ],
            'modalSubmit' => 'Visszaállítás',
            'tooltip' => '":name" visszaállítása aktuális ENV-ként',
        ],
        'delete-backup' => [
            'tooltip' => '":name" mentés törlése',
            'confirm' => [
                'title' => 'Véglegesen törölni fogod a(z) ":name" mentési fájlt. Biztos vagy benne?',
            ],
        ],
    ],
];
