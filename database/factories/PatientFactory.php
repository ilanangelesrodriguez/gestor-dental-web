<?php

namespace Database\Factories;

use App\Models\Patient;
use App\Models\Historial;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PatientFactory extends Factory
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
            'name' =>$name,
            'phone' =>$this->faker->numberBetween(100000000, 999999999),
            'email'=>$this->faker->unique()->safeEmail,
        ];
    }
}
