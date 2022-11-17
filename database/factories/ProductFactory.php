<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Exception;
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
     * @throws Exception
     */
    public function definition(): array
    {
        $category = Category::factory()->create();
        return [
            'category_id' => $category->id,
            'name' => 'text',
            'description' => $this->faker->text(500),
            'price' => $this->faker->randomFloat(8, 10, 1000),
            'image' => $this->faker->image,
            'status' => random_int(1, 3)
        ];
    }
}
