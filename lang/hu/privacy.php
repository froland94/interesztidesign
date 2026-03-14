<?php

declare(strict_types=1);

return [
    'title' => 'Adatkezelési tájékoztató',
    'last_update' => 'Utolsó frissítés: 2026. 01. 06',
    'intro_geo' => 'Ez az Adatkezelési tájékoztató az Európai Gazdasági Térség és Svájc állampolgáraira, valamint jogszerűen ott tartózkodó személyekre vonatkozik.',

    'sections' => [
        'controller' => [
            'title' => '1. Az adatkezelő adatai',
            'name' => 'Adatkezelő: :name',
            'contact' => 'Kapcsolattartás: :email',
            'website' => 'Weboldal: :url',
        ],
        'purpose' => [
            'title' => '2. Az adatkezelés célja',
            'intro' => 'Az adatkezelés célja:',
            'list' => [
                'kapcsolatfelvétel',
                'előzetes egyeztetés',
                'a megkeresés megválaszolása',
            ],
            'outro' => 'Az űrlap kitöltése nem minősül ajánlatkérésnek, és nem hoz létre szerződéses jogviszonyt.',
        ],
        'scope' => [
            'title' => '3. A kezelt személyes adatok köre',
            'intro' => 'Az űrlap használata során az alábbi személyes adatok kerülnek kezelésre:',
            'mandatory' => [
                'title' => 'Kötelező adatok:',
                'list' => [
                    'név',
                    'e-mail cím',
                    'kiválasztott szolgáltatás',
                    'ingatlan alapadatai (cím vagy környék, típus, alapterület, helyiségek száma)',
                ],
            ],
            'optional' => [
                'title' => 'Nem kötelező adatok:',
                'list' => [
                    'telefonszám',
                    'üzenetben megadott további információk, igények, elképzelések',
                ],
            ],
        ],
        'legal_basis' => [
            'title' => '4. Az adatkezelés jogalapja',
            'content' => 'Az adatkezelés jogalapja az érintett önkéntes hozzájárulása (GDPR 6. cikk (1) bekezdés a) pont). A hozzájárulás az űrlap elküldésével történik meg.',
        ],
        'storage' => [
            'title' => '5. Az adatok tárolása és feldolgozása',
            'intro' => 'A beküldött adatok:',
            'list' => [
                'e-mail formájában megérkeznek az adatkezelő részére',
                'a weboldal adminisztrációs felületén is tárolódnak',
            ],
            'processor' => 'Adatfeldolgozó: a weboldal üzemeltetését végző tárhelyszolgáltató (WordPress.com / Automattic Inc.)',
            'extra' => 'Az adatok tárolása elsősorban az Európai Unión belül történik, azonban a szolgáltató infrastruktúrája miatt bizonyos esetekben EU-n kívüli adatfeldolgozás is előfordulhat. A szolgáltató megfelelő garanciákat (pl. szerződéses feltételek) alkalmaz a GDPR-nak való megfelelés érdekében.',
        ],
        'duration' => [
            'title' => '6. Az adatkezelés időtartama',
            'intro' => 'A személyes adatok megőrzése:',
            'list' => [
                'a kapcsolatfelvétel lezárásáig',
                'illetve addig, amíg az érintett nem kéri azok törlését, de legfeljebb 12 hónapig',
            ],
        ],
        'access' => [
            'title' => '7. Az adatokhoz hozzáférők köre',
            'intro' => 'A személyes adatokhoz kizárólag:',
            'list' => [
                'az adatkezelő',
                'valamint a technikai működtetéshez szükséges adatfeldolgozók',
            ],
            'outro' => 'férhetnek hozzá. Az adatok harmadik fél részére marketing vagy egyéb célból nem kerülnek továbbításra.',
        ],
        'rights' => [
            'title' => '8. Az érintettek jogai',
            'intro' => 'Az érintett jogosult:',
            'list' => [
                'tájékoztatást kérni a róla kezelt adatokról',
                'kérni azok helyesbítését',
                'kérni azok törlését',
                'az adatkezelés korlátozását kérni',
                'hozzájárulását bármikor visszavonni',
            ],
            'outro' => 'A hozzájárulás visszavonása nem érinti a visszavonás előtti adatkezelés jogszerűségét.',
        ],
        'remedies' => [
            'title' => '9. Jogorvoslati lehetőségek',
            'content' => 'Az érintett panasszal élhet a felügyeleti hatóságnál: Nemzeti Adatvédelmi és Információszabadság Hatóság (NAIH)',
        ],
    ],
];
