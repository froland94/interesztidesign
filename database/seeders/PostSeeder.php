<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'title' => ['hu' => 'Színarányok az otthonunkban', 'en' => 'Color ratios in our home'],
                'slug' => ['hu' => 'szinaranyok-az-otthonunkban', 'en' => 'color-ratios-in-our-home'],
                'excerpt' => [
                    'hu' => 'Sokan azért tartózkodnak az élénkebb színektől az otthonukban, mert félnek a káosztól. Mi van, ha túl sok lesz? Mi van, ha nem illenek össze? Ezek a leggyakoribb kételyek, amiket hallok.',
                    'en' => 'Many people avoid vibrant colors in their home because they fear chaos. What if there is too much? What if they don\'t match? These are the most common doubts I hear.',
                ],
                'content' => [
                    [
                        'type' => 'text',
                        'data' => [
                            'content' => [
                                'hu' => '<p>Sokan azért tartózkodnak az élénkebb színektől az otthonukban, mert félnek a káosztól. Mi van, ha túl sok lesz? Mi van, ha nem illenek össze? Ezek a leggyakoribb kételyek, amiket hallok. Pedig a színek adják meg egy lakás valódi lelkét. Színek nélkül ugyan lehet élni, de a tapasztalatom az, hogy nem érdemes: a jól megválasztott árnyalatoktól az otthon egyszerre válik otthonosabb és személyesebb hellyé.</p><p>A legfontosabb szabály: ne félj a kontrasztoktól! Egy sötét fal egy fehér szobában nem nyomasztó, hanem karakteres. Egy élénk párnaszín egy semleges kanapén nem zavaros, hanem vidám. A kulcs az arány: 60-30-10. Az alap szín tegye ki a tér 60%-át, a kiegészítő 30%-ot, a hangsúlyszín pedig csupán 10%-ot.</p>',
                                'en' => '<p>Many people avoid vibrant colors in their home because they fear chaos. What if there is too much? What if they don\'t match? These are the most common doubts I hear. Yet colors are what give a home its true soul. You can live without colors, but in my experience it\'s not worth it: well-chosen shades make a home both cozier and more personal.</p><p>The most important rule: don\'t be afraid of contrasts! A dark wall in a white room is not oppressive, it\'s characterful. A bright cushion color on a neutral sofa is not chaotic, it\'s cheerful. The key is proportion: 60-30-10. The base color should occupy 60% of the space, the complementary color 30%, and the accent color just 10%.</p>',
                            ],
                        ],
                    ],
                ],
                'is_published' => true,
                'published_at' => '2026-02-26',
            ],
            [
                'title' => ['hu' => 'IKEA: tudatos vásárló kisokos', 'en' => 'IKEA: a conscious shopper\'s guide'],
                'slug' => ['hu' => 'ikea-tudatos-vasarlo-kisokos', 'en' => 'ikea-conscious-shopper-guide'],
                'excerpt' => [
                    'hu' => 'Az Ikeával kapcsolatban szerintem rengeteg a tévhit: sokan úgy gondolják, hogy ott minden ugyanúgy néz ki, semmi sem izgalmas, vagy éppen ocska a minőség. Ez több darabra valóban igaz, de az egyáltalán nem mindenre!',
                    'en' => 'There are many misconceptions about IKEA: many people think everything looks the same there, nothing is exciting, or the quality is cheap. This is true for some pieces, but definitely not for everything!',
                ],
                'content' => [
                    [
                        'type' => 'text',
                        'data' => [
                            'content' => [
                                'hu' => '<p>Az Ikeával kapcsolatban szerintem rengeteg a tévhit: sokan úgy gondolják, hogy ott minden ugyanúgy néz ki, semmi sem izgalmas, vagy éppen ocska a minőség. Ez több darabra valóban igaz, de az egyáltalán nem mindenre! Én a mai napig imádom az Ikeát böngészni, de tény, hogy gyakorlott szem kell ahhoz, hogy megtalálja az ember a valódian értékes darabokat.</p><h2>Mit érdemes venni?</h2><p>Elsősorban az időtálló, egyszerű formájú alapdarabokat: a KALLAX polcrendszert, a BILLY könyvespolcot, a POÄNG foteleket. Ezek minőségük és áruk alapján verhetetlen választások. Kerüld viszont a trendkövetőbb, szezonális darabokat – ezek általában gyengébb minőségűek és hamar elavulnak.</p>',
                                'en' => '<p>There are many misconceptions about IKEA: many people think everything looks the same there, nothing is exciting, or the quality is cheap. This is true for some pieces, but definitely not for everything! I still love browsing IKEA, but the fact is that you need a trained eye to find the truly valuable pieces.</p><h2>What\'s worth buying?</h2><p>First and foremost, timeless, simple basic pieces: the KALLAX shelf system, the BILLY bookcase, the POÄNG armchairs. These are unbeatable choices based on their quality and price. Avoid the more trend-following, seasonal pieces – these are generally lower quality and quickly become outdated.</p>',
                            ],
                        ],
                    ],
                ],
                'is_published' => true,
                'published_at' => '2026-02-10',
            ],
            [
                'title' => ['hu' => 'A rendezett otthon titka, 2. rész: kábelrendezés', 'en' => 'The secret of an organized home, part 2: cable management'],
                'slug' => ['hu' => 'a-rendezett-otthon-titka-2-resz-kabelrendezes', 'en' => 'organized-home-secret-part-2-cable-management'],
                'excerpt' => [
                    'hu' => 'A zárt tárolási rendszerekről szóló posztomban megígértem, hogy beszélünk majd a kábelmenedzsmentről is. Hiszen legyen akármilyen szép és otthonos a lakásunk, ha mindenhol vezetékek kígyóznak, az szerintem instant módon ront az összképen.',
                    'en' => 'In my post about closed storage systems I promised we\'d also talk about cable management. No matter how beautiful and cozy your home is, if cables are snaking everywhere, it instantly ruins the overall look.',
                ],
                'content' => [
                    [
                        'type' => 'text',
                        'data' => [
                            'content' => [
                                'hu' => '<p>A zárt tárolási rendszerekről szóló posztomban megígértem, hogy beszélünk majd a kábelmenedzsmentről is. Hiszen legyen akármilyen szép és otthonos a lakásunk, ha mindenhol vezetékek kígyóznak, az szerintem instant módon ront az összképen. Nem vagyok profi kábelrendszerező (vannak, akik ezt már-már művészi szinten művelik), de mutatok néhány olyan megoldást, ami nálunk bevált.</p><h2>Kábelrendezők íróasztalok alá</h2><p>Az egyik legjobb befektetés egy kábeltartó kosár vagy tálca az íróasztal alá. Ezekbe bele lehet gyömöszölni az elosztókat, töltőket, és az összes felesleges kábelt. Láthatatlan, olcsó, és azonnal rendezettebb lesz tőle az otthoni iroda.</p>',
                                'en' => '<p>In my post about closed storage systems I promised we\'d also talk about cable management. No matter how beautiful and cozy your home is, if cables are snaking everywhere, it instantly ruins the overall look. I\'m not a professional cable organizer (there are people who do this at an almost artistic level), but let me show you some solutions that worked for us.</p><h2>Cable organizers under desks</h2><p>One of the best investments is a cable management basket or tray under the desk. You can stuff power strips, chargers, and all the excess cables into these. Invisible, cheap, and immediately makes your home office look more organized.</p>',
                            ],
                        ],
                    ],
                ],
                'is_published' => true,
                'published_at' => '2026-02-02',
            ],
        ];

        foreach ($posts as $data) {
            Post::create($data);
        }
    }
}
