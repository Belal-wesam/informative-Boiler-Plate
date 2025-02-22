<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name_en" => fake()->firstName() . ' ' . fake()->lastName(),
            "name_ar" => fake('ar_SA')->firstName() . ' ' . fake()->lastName(),
            "position_en" => fake()->jobTitle(),
            "position_ar" => fake('ar_SA')->jobTitle(),
            "review_en" => fake()->sentence(),
            "review_ar" => fake('ar_SA')->sentence(),
            "image" => "public/reviews/placeholder.png"
        ];
    }
}
