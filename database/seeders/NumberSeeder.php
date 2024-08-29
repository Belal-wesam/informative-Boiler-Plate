<?php

namespace Database\Seeders;

use App\Models\Number;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numbers = [
            [
                "label_en" => "Workers",
                "label_ar" => "عامل",
                "number" => "220",
                "icon" => "flaticon-worker",
            ],
            [
                "label_en" => "Projects",
                "label_ar" => "مشروع",
                "number" => "140",
                "icon" => "flaticon-layers",
            ],
            [
                "label_en" => "Awards",
                "label_ar" => "جائزة",
                "number" => "100",
                "icon" => "flaticon-trophy2",
            ]
        ];
        Number::create([
            "image" => "public/numbers/placeholder.png",
            "numbers" => json_encode($numbers)
        ]);
    }
}
