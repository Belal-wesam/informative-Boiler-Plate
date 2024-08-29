<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->locale('ar_SA');
        $title_en =  $this->faker->sentence();
        return [
            "title_en" => $title_en,
            "title_ar" => $this->faker->sentence(),
            "body_en" => $this->faker->paragraph(90),
            "body_ar" => $this->faker->paragraph(90),
            "slug" => Str::slug($title_en),
            "image" => "public/articles/placeholder.png"
        ];
    }
}
