<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banner_1 = [
            "heading_en" => "Best Industrail Company",
            "heading_ar" => "خلي شغلك مميز بأفكار رائعة",
            "sub_heading_en" => "Porttitor ornare fermentum aliquam pharetra facilisis gravida risus suscipit
                Dui  feugiat fusce conubia ridiculus tristique parturient",
            "sub_heading_ar" => "تطوير الأعمال يساعد على زيادة الأرباح وبناء علاقات قوية مع العملاء. التخطيط الجيد
                والاستراتيجية المناسبة هما المفتاح للنجاح. استخدام التكنولوجيا الحديثة يمكن أن يعزز الإنتاجية ويسهم في تحقيق أهدافك ",
            "image" => "public/banners/placeholder.png"
        ];


        $banner_2 = [
            "heading_en" => "Best Industrail Company",
            "heading_ar" => "أطلق مشروعاً متطوراً و ذو تأثير",
            "sub_heading_en" => "Porttitor ornare fermentum aliquam pharetra facilisis gravida risus suscipit
                Dui  feugiat fusce conubia ridiculus tristique parturient",
            "sub_heading_ar" => "تطوير الأعمال يساعد على زيادة الأرباح وبناء علاقات قوية مع العملاء. التخطيط الجيد
                والاستراتيجية المناسبة هما المفتاح للنجاح. استخدام التكنولوجيا الحديثة يمكن أن يعزز الإنتاجية ويسهم في تحقيق أهدافك ",
            "image" => "public/banners/placeholder.png"
        ];

        $banner_3 = [
            "heading_en" => "Best Industrail Company",
            "heading_ar" => "إجعل عملك ينمو على مستوى آخر تماماً",
            "sub_heading_en" => "Porttitor ornare fermentum aliquam pharetra facilisis gravida risus suscipit
                Dui  feugiat fusce conubia ridiculus tristique parturient",
            "sub_heading_ar" => "تطوير الأعمال يساعد على زيادة الأرباح وبناء علاقات قوية مع العملاء. التخطيط الجيد
                والاستراتيجية المناسبة هما المفتاح للنجاح. استخدام التكنولوجيا الحديثة يمكن أن يعزز الإنتاجية ويسهم في تحقيق أهدافك ",
            "image" => "public/banners/placeholder.png"
        ];

        Banner::create($banner_1);
        Banner::create($banner_2);
        Banner::create($banner_3);
    }
}
