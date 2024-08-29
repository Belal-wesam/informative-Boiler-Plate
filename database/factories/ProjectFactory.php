<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title_en = fake()->name();
        return [
            "title_en" => $title_en,
            "title_ar" => "مشروع شركة الريادة",
            "description_en" => fake()->paragraph(),
            "description_ar" => "وكلها استغلال بديع. زمن في رفضها قضاء الحق لها قيمتها. لأن لا ووقت عند والطبيب من. إزعاج هو استغلاله وهو قد يجلب.",
            "slug" => Str::slug($title_en),
            "image" => "public/projects/placeholder.png",
        ];
    }
}
