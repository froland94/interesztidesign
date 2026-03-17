<?php

declare(strict_types=1);

return [
    'title' => 'Vedd fel velem a kapcsolatot',
    'subtitle' => 'Kérlek, töltsd ki az alábbi űrlapot, ez még semmilyen kötelezettséggel nem jár, arra használom, hogy hatékonyan tudjam felvenni veled a kapcsolatot.',
    'form' => [
        'name' => 'Név',
        'email' => 'Email',
        'phone' => 'Telefonszám',
        'service' => 'Melyik szolgáltatás érdekel?',
        'property' => 'Ingatlan alapadatai (cím/környék, típus – ház, lakás, alapterület, helyiségek száma)',
        'description' => 'Írd le röviden az otthonoddal kapcsolatos problémáid, igényeid, elképzeléseid.',
        'privacy' => 'Elolvastam és elfogadom az Adatkezelési tájékoztatót.',
        'privacy_link_text' => 'Az <a href=":url" class="text-neutral-900 hover:underline font-medium">Adatkezelési tájékoztatót</a> itt érheti el.',
        'submit' => 'Küldés',
        'sending' => 'Küldés...',
        'required' => '(kötelező)',
        'success' => 'Köszönöm az üzeneted! Hamarosan felveszem veled a kapcsolatot.',
    ],
    'validation' => [
        'name_required' => 'A neved megadása kötelező.',
        'email_required' => 'Az e-mail cím megadása kötelező.',
        'email_invalid' => 'Kérlek, adj meg egy érvényes e-mail címet.',
        'phone_invalid' => 'Kérlek, adj meg egy érvényes telefonszámot.',
        'property_required' => 'Az ingatlan adatainak megadása kötelező.',
        'services_required' => 'Kérlek, válassz legalább egy szolgáltatást.',
        'privacy_required' => 'Az adatkezelési tájékoztató elfogadása kötelező.',
    ],
    'mail' => [
        'subject' => 'Új kapcsolatfelvételi üzenet – :name',
        'heading' => 'Új kapcsolatfelvételi üzenet',
        'fields' => [
            'name' => 'Név',
            'email' => 'E-mail',
            'phone' => 'Telefonszám',
            'property' => 'Ingatlan adatai',
            'services' => 'Érdeklődő szolgáltatások',
            'description' => 'Leírás',
        ],
    ],
];
