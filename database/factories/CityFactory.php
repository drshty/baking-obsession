<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Province;
use App\Models\City;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = City::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->city,
            'province_id' => Province::inRandomOrder()->first()->id,
        ];
    }
    public function configure()
    {
        return $this->afterCreating(function (City $city) {
            $province = Province::find($city->province_id);
            $city->province()->associate($province);
            $city->save();
        });
    }
}