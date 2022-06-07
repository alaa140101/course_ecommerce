<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ProductCategory;

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
    public function definition()
    {
        $categories = ProductCategory::whereNotNull('parent_id')->pluck('id');

        return [
            'name'          => $this->faker->sentence(2, true),
            'slug'        => $this->faker->unique()->slug(2, true),
            'description'          => $this->faker->paragraph,
            'price'         => $this->faker->numberBetween(5, 200),
            'quantity'    => $this->faker->numberBetween(10, 100),
            'product_category_id'         => $categories->random(),
            'featured'          => $this->faker->rand(0, 1),
            'status'          => $this->faker->true,
            'created_at'          => $this->faker->now(),
            'updated_at'          => $this->faker->now(),
        ];
    }
}
