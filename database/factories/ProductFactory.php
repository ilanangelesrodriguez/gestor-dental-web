<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name = $this->faker->unique()->sentence();
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->text(255),
            'status' => $this->faker->randomElement(['0', '1']),
            // 'category_id' => Category::inRandomOrder()->first()->id,
            'category_id'=>Category::inRandomOrder()->value('id'),
            'proveedor_id'=>Proveedor::inRandomOrder()->value('id'),
            // 'proveedor_id' => Proveedor::inRandomOrder()->first()->id
        ];
    }
}
