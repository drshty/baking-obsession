<?php

namespace Database\Factories;
use App\Models\Province;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory
 */
class ProvinceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Province::class;
    
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->state(),
        ];
    }
}