<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partner_1 = [
            "title_en" => "Joy Tesh",
            "title_ar" => "جوي تيش",
            "image" => "public/partners/placeholder.png"
        ];
        $partner_2 = [
            "title_en" => "Sefrov",
            "title_ar" => "سيفروف",
            "image" => "public/partners/placeholder.png"
        ];
        $partner_3 = [
            "title_en" => "Waleon",
            "title_ar" => "واليون",
            "image" => "public/partners/placeholder.png"
        ];
        $partner_4 = [
            "title_en" => "Calsa",
            "title_ar" => "كالسا",
            "image" => "public/partners/placeholder.png"
        ];
        $partner_5 = [
            "title_en" => "Contex",
            "title_ar" => "كونتكس",
            "image" => "public/partners/placeholder.png"
        ];

        Partner::create($partner_1);
        Partner::create($partner_2);
        Partner::create($partner_3);
        Partner::create($partner_4);
        Partner::create($partner_5);
    }
}
