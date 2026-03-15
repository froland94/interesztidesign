<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'A(z) :attribute mezőt el kell fogadni.',
    'accepted_if' => 'A(z) :attribute mezőt el kell fogadni, ha a(z) :other értéke :value.',
    'active_url' => 'A(z) :attribute nem érvényes URL.',
    'after' => 'A(z) :attribute dátumnak :date utáninak kell lennie.',
    'after_or_equal' => 'A(z) :attribute dátumnak :date utáninak vagy azzal megegyezőnek kell lennie.',
    'alpha' => 'A(z) :attribute csak betűket tartalmazhat.',
    'alpha_dash' => 'A(z) :attribute csak betűket, számokat, kötőjeleket és aláhúzásokat tartalmazhat.',
    'alpha_num' => 'A(z) :attribute csak betűket és számokat tartalmazhat.',
    'array' => 'A(z) :attribute mezőnek egy tömbnek kell lennie.',
    'ascii' => 'A(z) :attribute csak egybájtos alfanumerikus karaktereket és szimbólumokat tartalmazhat.',
    'before' => 'A(z) :attribute dátumnak :date előttinek kell lennie.',
    'before_or_equal' => 'A(z) :attribute dátumnak :date előttinek vagy azzal megegyezőnek kell lennie.',
    'between' => [
        'array' => 'A(z) :attribute :min és :max közötti számú elemet tartalmazhat.',
        'file' => 'A(z) :attribute méretének :min és :max kilobájt között kell lennie.',
        'numeric' => 'A(z) :attribute értékének :min és :max között kell lennie.',
        'string' => 'A(z) :attribute hossza :min és :max karakter között kell lennie.',
    ],
    'boolean' => 'A(z) :attribute mezőnek igaznak vagy hamisnak kell lennie.',
    'can' => 'A(z) :attribute mező jogosulatlan értéket tartalmaz.',
    'confirmed' => 'A(z) :attribute megerősítése nem egyezik.',
    'contains' => 'A(z) :attribute mezőből hiányzik egy kötelező érték.',
    'current_password' => 'A jelszó helytelen.',
    'date' => 'A(z) :attribute nem érvényes dátum.',
    'date_equals' => 'A(z) :attribute dátumnak meg kell egyeznie ezzel: :date.',
    'date_format' => 'A(z) :attribute nem felel meg a következő formátumnak: :format.',
    'decimal' => 'A(z) :attribute mezőnek :decimal tizedesjegyet kell tartalmaznia.',
    'declined' => 'A(z) :attribute mezőt el kell utasítani.',
    'declined_if' => 'A(z) :attribute mezőt el kell utasítani, ha a(z) :other értéke :value.',
    'different' => 'A(z) :attribute és a(z) :other mezőknek különbözőeknek kell lenniük.',
    'digits' => 'A(z) :attribute mezőnek :digits számjegyből kell állnia.',
    'digits_between' => 'A(z) :attribute mezőnek :min és :max számjegy között kell lennie.',
    'dimensions' => 'A(z) :attribute érvénytelen képfelbontással rendelkezik.',
    'distinct' => 'A(z) :attribute mezőnek duplikált értéke van.',
    'doesnt_contain' => 'A(z) :attribute mező nem tartalmazhatja a következőket: :values.',
    'doesnt_end_with' => 'A(z) :attribute mező nem végződhet a következők egyikével: :values.',
    'doesnt_start_with' => 'A(z) :attribute mező nem kezdődhet a következők egyikével: :values.',
    'email' => 'A(z) :attribute mezőnek érvényes e-mail címnek kell lennie.',
    'ends_with' => 'A(z) :attribute mezőnek a következők egyikével kell végződnie: :values.',
    'enum' => 'A kiválasztott :attribute érvénytelen.',
    'exists' => 'A kiválasztott :attribute érvénytelen.',
    'extensions' => 'A(z) :attribute mezőnek a következő kiterjesztések egyikével kell rendelkeznie: :values.',
    'file' => 'A(z) :attribute mezőnek fájlnak kell lennie.',
    'filled' => 'A(z) :attribute mezőt ki kell tölteni.',
    'gt' => [
        'array' => 'A(z) :attribute mezőnek több mint :value elemet kell tartalmaznia.',
        'file' => 'A(z) :attribute méretének nagyobbnak kell lennie :value kilobájtnál.',
        'numeric' => 'A(z) :attribute értékének nagyobbnak kell lennie, mint :value.',
        'string' => 'A(z) :attribute hosszának nagyobbnak kell lennie, mint :value karakter.',
    ],
    'gte' => [
        'array' => 'A(z) :attribute mezőnek legalább :value elemet kell tartalmaznia.',
        'file' => 'A(z) :attribute méretének legalább :value kilobájtnak kell lennie.',
        'numeric' => 'A(z) :attribute értékének legalább :value-nak kell lennie.',
        'string' => 'A(z) :attribute hosszának legalább :value karakternek kell lennie.',
    ],
    'hex_color' => 'A(z) :attribute érvényes hexadecimális színnek kell lennie.',
    'image' => 'A(z) :attribute mezőnek képnek kell lennie.',
    'in' => 'A kiválasztott :attribute érvénytelen.',
    'in_array' => 'A(z) :attribute mezőnek léteznie kell a(z) :other mezőben.',
    'integer' => 'A(z) :attribute mezőnek egész számnak kell lennie.',
    'ip' => 'A(z) :attribute mezőnek érvényes IP címnek kell lennie.',
    'ipv4' => 'A(z) :attribute mezőnek érvényes IPv4 címnek kell lennie.',
    'ipv6' => 'A(z) :attribute mezőnek érvényes IPv6 címnek kell lennie.',
    'json' => 'A(z) :attribute mezőnek érvényes JSON szövegnek kell lennie.',
    'list' => 'A(z) :attribute mezőnek egy listának kell lennie.',
    'lowercase' => 'A(z) :attribute mezőnek kisbetűsnek kell lennie.',
    'lt' => [
        'array' => 'A(z) :attribute mezőnek kevesebb mint :value elemet kell tartalmaznia.',
        'file' => 'A(z) :attribute méretének kisebbnek kell lennie :value kilobájtnál.',
        'numeric' => 'A(z) :attribute értékének kisebbnek kell lennie, mint :value.',
        'string' => 'A(z) :attribute hosszának kisebbnek kell lennie, mint :value karakter.',
    ],
    'lte' => [
        'array' => 'A(z) :attribute mező nem tartalmazhat több mint :value elemet.',
        'file' => 'A(z) :attribute mérete legfeljebb :value kilobájt lehet.',
        'numeric' => 'A(z) :attribute értéke legfeljebb :value lehet.',
        'string' => 'A(z) :attribute hossza legfeljebb :value karakter lehet.',
    ],
    'mac_address' => 'A(z) :attribute érvényes MAC-címnek kell lennie.',
    'max' => [
        'array' => 'A(z) :attribute hossza nem lehet több :max elemnél.',
        'file' => 'A(z) :attribute mérete nem lehet több :max kilobájtnál.',
        'numeric' => 'A(z) :attribute értéke nem lehet több :max-nál.',
        'string' => 'A(z) :attribute hossza nem lehet több :max karakternél.',
    ],
    'max_digits' => 'A(z) :attribute mező nem tartalmazhat többet :max számjegynél.',
    'mimes' => 'A(z) :attribute mezőnek a következő fájltípusok egyikének kell lennie: :values.',
    'mimetypes' => 'A(z) :attribute mezőnek a következő fájltípusok egyikének kell lennie: :values.',
    'min' => [
        'array' => 'A(z) :attribute legalább :min elemet kell, hogy tartalmazzon.',
        'file' => 'A(z) :attribute mérete nem lehet kevesebb :min kilobájtnál.',
        'numeric' => 'A(z) :attribute értéke nem lehet kevesebb :min-nél.',
        'string' => 'A(z) :attribute hossza nem lehet kevesebb :min karakternél.',
    ],
    'min_digits' => 'A(z) :attribute mezőnek legalább :min számjegyet kell tartalmaznia.',
    'missing' => 'A(z) :attribute mezőnek hiányoznia kell.',
    'missing_if' => 'A(z) :attribute mezőnek hiányoznia kell, ha a(z) :other értéke :value.',
    'missing_unless' => 'A(z) :attribute mezőnek hiányoznia kell, kivéve ha a(z) :other értéke :value.',
    'missing_with' => 'A(z) :attribute mezőnek hiányoznia kell, ha a(z) :values jelen van.',
    'missing_with_all' => 'A(z) :attribute mezőnek hiányoznia kell, ha a(z) :values jelen vannak.',
    'multiple_of' => 'A(z) :attribute mezőnek a(z) :value többszörösének kell lennie.',
    'not_in' => 'A kiválasztott :attribute érvénytelen.',
    'not_regex' => 'A(z) :attribute formátuma érvénytelen.',
    'numeric' => 'A(z) :attribute mezőnek számnak kell lennie.',
    'password' => [
        'letters' => 'A(z) :attribute mezőnek legalább egy betűt kell tartalmaznia.',
        'mixed' => 'A(z) :attribute mezőnek legalább egy kis- és egy nagybetűt kell tartalmaznia.',
        'numbers' => 'A(z) :attribute mezőnek legalább egy számot kell tartalmaznia.',
        'symbols' => 'A(z) :attribute mezőnek legalább egy szimbólumot kell tartalmaznia.',
        'uncompromised' => 'A megadott :attribute kiszivárgott adatbázisban szerepel. Kérjük, válasszon másikat.',
    ],
    'present' => 'A(z) :attribute mezőnek jelen kell lennie.',
    'present_if' => 'A(z) :attribute mezőnek jelen kell lennie, ha a(z) :other értéke :value.',
    'present_unless' => 'A(z) :attribute mezőnek jelen kell lennie, kivéve ha a(z) :other értéke :value.',
    'present_with' => 'A(z) :attribute mezőnek jelen kell lennie, ha a(z) :values jelen van.',
    'present_with_all' => 'A(z) :attribute mezőnek jelen kell lennie, ha a(z) :values jelen vannak.',
    'prohibited' => 'A(z) :attribute mező tilos.',
    'prohibited_if' => 'A(z) :attribute mező tilos, ha a(z) :other értéke :value.',
    'prohibited_if_accepted' => 'A(z) :attribute mező tilos, ha a(z) :other el van fogadva.',
    'prohibited_if_declined' => 'A(z) :attribute mező tilos, ha a(z) :other el van utasítva.',
    'prohibited_unless' => 'A(z) :attribute mező tilos, kivéve ha a(z) :other értéke a következők egyike: :values.',
    'prohibits' => 'A(z) :attribute mező tiltja a(z) :other jelenlétét.',
    'regex' => 'A(z) :attribute formátuma érvénytelen.',
    'required' => 'A(z) :attribute mező kitöltése kötelező.',
    'required_array_keys' => 'A(z) :attribute mezőnek tartalmaznia kell a következőket: :values.',
    'required_if' => 'A(z) :attribute mező kitöltése kötelező, ha a(z) :other értéke :value.',
    'required_if_accepted' => 'A(z) :attribute mező kitöltése kötelező, ha a(z) :other el van fogadva.',
    'required_if_declined' => 'A(z) :attribute mező kitöltése kötelező, ha a(z) :other el van utasítva.',
    'required_unless' => 'A(z) :attribute mező kitöltése kötelező, kivéve ha a(z) :other értéke a következők egyike: :values.',
    'required_with' => 'A(z) :attribute mező kitöltése kötelező, ha a(z) :values jelen van.',
    'required_with_all' => 'A(z) :attribute mező kitöltése kötelező, ha a(z) :values jelen vannak.',
    'required_without' => 'A(z) :attribute mező kitöltése kötelező, ha a(z) :values nincs jelen.',
    'required_without_all' => 'A(z) :attribute mező kitöltése kötelező, ha egyik :values sincs jelen.',
    'same' => 'A(z) :attribute és a(z) :other mezőknek meg kell egyezniük.',
    'size' => [
        'array' => 'A(z) :attribute mezőnek :size elemet kell tartalmaznia.',
        'file' => 'A(z) :attribute méretének :size kilobájtnak kell lennie.',
        'numeric' => 'A(z) :attribute értékének :size-nak kell lennie.',
        'string' => 'A(z) :attribute hosszának :size karakternek kell lennie.',
    ],
    'starts_with' => 'A(z) :attribute mezőnek a következők egyikével kell kezdődnie: :values.',
    'string' => 'A(z) :attribute mezőnek szövegnek kell lennie.',
    'timezone' => 'A(z) :attribute mezőnek érvényes időzónának kell lennie.',
    'unique' => 'A(z) :attribute már foglalt.',
    'uploaded' => 'A(z) :attribute feltöltése sikertelen volt.',
    'uppercase' => 'A(z) :attribute mezőnek nagybetűsnek kell lennie.',
    'url' => 'A(z) :attribute mezőnek érvényes URL-nek kell lennie.',
    'ulid' => 'A(z) :attribute mezőnek érvényes ULID-nak kell lennie.',
    'uuid' => 'A(z) :attribute mezőnek érvényes UUID-nak kell lennie.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
