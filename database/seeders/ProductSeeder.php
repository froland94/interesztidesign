<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'tag' => ['hu' => 'Vibe check', 'en' => 'Vibe check'],
                'title' => ['hu' => 'Lakberendezési tanácsadás', 'en' => 'Design Consultation'],
                'description' => [
                    'hu' => 'Akkor ideális választás, ha már van elképzelésed az otthonodról, de bizonytalan vagy a részletekben. Segít stílus-, anyag- vagy színválasztási kérdésekben, és szakmai visszaigazolást ad a már meglévő elképzeléseidre. Megnézzük az inspirációidat (legyen az TikTok, YouTube, Instagram vagy Pinterest), és megvizsgáljuk, hogyan és milyen mértékben valósíthatók meg az otthonodban. Tulajdonosoknak és bérlőknek egyaránt ajánlott.',
                    'en' => 'The ideal choice if you already have a vision for your home but feel uncertain about the details. It helps with style, material, or colour choices, and provides professional confirmation for your existing concept. We’ll look at your inspirations (whether from TikTok, YouTube, Instagram, or Pinterest) and see how and to what extent they can be realized in your home. Recommended for homeowners and renters alike.',
                ],
                'includes' => [
                    'hu' => ['Összesen 3 óra konzultáció online vagy személyesen (személyesen csak BP) - további órák: 15 000 Ft/óra', 'Anyag- és színválasztási tanácsadás', 'Burkolat- és textil ajánlások', 'Bútor ajánlások', 'DIY ötletek és trükkök', 'Mood board', 'Írásos összefoglaló a konzultációról és az ajánlásokról'],
                    'en' => ['A total of 3 hours of consultation online or in person (only in BP) - additional hours: 15.000 HUF/hour', 'Material and colour consultancy', 'Surface and textile recommendations', 'Furniture recommendations', 'DIY tips and tricks', 'Mood board', 'Written summary of the consultation and recommendations'],
                ],
                'price' => ['hu' => '70 000 Ft', 'en' => '70.000 Ft'],
                'cta_text' => ['hu' => 'Tanácsot kérek', 'en' => 'Get advice'],
                'sort_order' => 1,
            ],
            [
                'tag' => ['hu' => 'Based', 'en' => 'Based'],
                'title' => ['hu' => 'Alap lakberendezési tervezés', 'en' => 'Interior Design Planning'],
                'description' => [
                    'hu' => 'Ezt a csomagot válaszd, ha az otthonod megjelenését és hangulatát is szeretnéd felfrissíteni, de nem tervezel bontással vagy falmozgatással járó felújítást. Ideális megoldás, ha nem akarsz hetekig koszban élni. Ha nem akarsz konnektorokat áthelyezni, de hangulatvilágításra vágysz. Ha nem akarod leverni a csempét, de vadonatúj fürdőszobát szeretnél. Tulajdonosoknak és bérlőknek egyaránt ajánlott.',
                    'en' => "Choose this package if you want to refresh both the look and feel of your home, but aren't planning a renovation that involves demolition or moving walls. It's the ideal solution if you don't want to live in a mess for weeks. If you don't want to move electrical outlets but still desire atmospheric lighting. If you don't want to rip up the tiles but still want a brand new bathroom. Recommended for homeowners and renters alike.",
                ],
                'includes' => [
                    'hu' => ['Korlátlan online konzultáció', '3 személyes konzultáció (Budapesten ingyenes, Pest megyében 15 000 Ft/alkalom)', '2–3 db 2D berendezési alaprajz', '3D látványtervek', 'Anyag-, textil- és színválasztási tanácsadás, mood board', 'Bútor- és világítási ajánlások, bevásárlólista', 'DIY ötletek és trükkök'],
                    'en' => ['Unlimited online consultations', '3 in-person consultations (free in Budapest, 15.000 HUF/visit in Pest County)', '2–3 2D floor plans', '3D visualisations', 'Material, textile, and colour consultancy, mood board', 'Furniture and lighting recommendations, shopping list', 'DIY tips and tricks'],
                ],
                'price' => ['hu' => '9 000 Ft/m²', 'en' => '9000 HUF/m²'],
                'cta_text' => ['hu' => 'Árajánlatot kérek', 'en' => 'Start my makeover'],
                'sort_order' => 2,
            ],
            [
                'tag' => ['hu' => 'Full send', 'en' => 'Full send'],
                'title' => ['hu' => 'Teljes lakberendezési tervezés', 'en' => 'Interior Design Planning'],
                'description' => [
                    'hu' => 'Ez a szolgáltatás neked szól, ha új építésű otthonba költözöl vagy teljes körű felújításba kezdtél. Itt nincs kompromisszum: falak mozgathatók, új funkciók alakíthatók ki, az elektromos és vízpontok áthelyezhetők. A cél egy teljesen személyre szabott, esztétikus és hosszú távon funkcionális otthon megtervezése, minden szükséges kiviteli tervvel.',
                    'en' => 'This service is for you if you’re moving into a newly built home or starting a complete renovation. There are no compromises here: walls can be moved, new functions can be created, and electrical or plumbing points can be relocated. The goal is to design a fully personalised, aesthetic, and long-term functional home, providing you with all the necessary plans for the realisation.',
                ],
                'includes' => [
                    'hu' => ['Korlátlan online és személyes konzultáció (Budapesten ingyenes, Pest megyében 15 000 Ft/alkalom)', 'Bontási és építési alaprajzok', 'Elektromos és világítási tervek', 'Burkolási és felületi tervek', '2–3 db 2D berendezési alaprajz', '3D látványtervek', 'Teljes körű tanácsadás, mood board', 'Bútor- és világítási ajánlások, bevásárlólista'],
                    'en' => ['Unlimited online and in-person consultations (free in Budapest, 15.000 HUF/visit in Pest County)', 'Demolition and construction floor plans', 'Electrical and lighting plans', 'Tiling and surface layouts', '2–3 2D floor plans', '3D visualisations', 'Full-scale consultancy, mood board', 'Furniture and lighting recommendations, shopping list'],
                ],
                'price' => ['hu' => '14 000 Ft/m²', 'en' => '14.000 HUF/m²'],
                'cta_text' => ['hu' => 'Folytatjuk', 'en' => 'Start my reno'],
                'sort_order' => 3,
            ],
            [
                'tag' => ['hu' => 'Lagom', 'en' => 'Lagom'],
                'title' => ['hu' => 'IKEA bútortervezés', 'en' => 'IKEA Furniture Design'],
                'description' => [
                    'hu' => 'Ez a szolgáltatás választható önállóan vagy bármelyik másik csomag kiegészítéseként. Ideális, ha IKEA konyhát és/vagy gardróbot szeretnél. Ezek tervezése speciális folyamat: a pontos rendeléshez nem elég a standard lakberendező szoftver. A bútorokat az IKEA saját tervezőprogramjaiban kell részletezni és összeállítani, ezért érhető el külön szolgáltatásként.',
                    'en' => "This service can be chosen on its own or as a supplement to any of the other three packages. It’s ideal if you’re set on an IKEA kitchen and/or wardrobe. Designing these is a specific process: to place a precise order, standard interior design software isn't enough. The furniture must be detailed and assembled within IKEA’s own planning tools, which is why this is available as a separate service.",
                ],
                'includes' => [
                    'hu' => ['Személyes felmérés (Budapesten ingyenes, Pest megyében 15 000 Ft/alkalom)', 'Bútortervezés az IKEA dedikált alkalmazásaiban (2 változat)', 'A rendelés közös átnézése és leadása a választott IKEA áruházban', 'Profi asztalosok és összeszerelő szakemberek ajánlása', 'A beépítés helyszíni felügyelete'],
                    'en' => ['In-person measurement (free in Budapest, 15.000 HUF/visit in Pest County)', 'Furniture design using IKEA’s dedicated applications (2 variations)', 'Reviewing and placing the order together at your chosen IKEA store', 'Recommendation of professional installers and assembly specialists', 'On-site supervision of the installation'],
                ],
                'price' => [
                    'hu' => "Konyha: 140 000 Ft\nGardrób: 80 000 Ft",
                    'en' => "kitchen: 140.000 HUF\nwardrobe: 80.000 HUF",
                ],
                'cta_text' => ['hu' => 'Bútort terveztetek', 'en' => 'Design my furniture'],
                'sort_order' => 4,
            ],
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
