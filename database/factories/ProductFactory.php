<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
            'tag' => [
                'hu' => $this->faker->words(2, true),
                'en' => $this->faker->words(2, true),
            ],
            'title' => [
                'hu' => $this->faker->sentence(3),
                'en' => $this->faker->sentence(3),
            ],
            'description' => [
                'hu' => $this->faker->paragraph(),
                'en' => $this->faker->paragraph(),
            ],
            'includes' => [
                'hu' => $this->faker->sentences(3),
                'en' => $this->faker->sentences(3),
            ],
            'price' => [
                'hu' => $this->faker->numberBetween(10000, 200000).' Ft',
                'en' => $this->faker->numberBetween(50, 500).' EUR',
            ],
            'cta_text' => [
                'hu' => $this->faker->word(),
                'en' => $this->faker->word(),
            ],
            'is_active' => true,
        ];
    }
}
