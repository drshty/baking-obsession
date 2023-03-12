<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Users;
use App\Models\City;
use App\Models\Province;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phonenumber' => $this->faker->phoneNumber(),
            'password' => bcrypt('password'), // default password
            'address' => $this->faker->streetAddress(),
            'city_id' => City::inRandomOrder()->first(), // replace with actual city IDs
            'province_id' => Province::inRandomOrder()->first(), // replace with actual province IDs
            'otp' => $this->faker->randomNumber(6),
            'isverify' => $this->faker->boolean(50),
            'verified_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
