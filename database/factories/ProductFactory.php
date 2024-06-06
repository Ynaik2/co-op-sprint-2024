<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => fake()->slug(),
            'name' => fake()->word(),
            'category_id' => Category::factory(),
            'price' => rand(1, 1000) / 100,
            'amount_in_stock' => rand(1, 100),
            'description' => '<p>'.fake()->paragraph(5).'</p>',
        ];
    }
}
