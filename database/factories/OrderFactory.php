<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use App\Models\OrderStatus;
use App\Models\PaymentType;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status_id = OrderStatus::inRandomOrder()->first();
        $user_id = User::inRandomOrder()->first();
        $product_id = Product::inRandomOrder()->first();
        $payment_id = PaymentType::inRandomOrder()->first();
        $totalAmount = fake()->randomFloat(2, 10, 100);
        $isPaid = fake()->boolean();

        return [
            'status_id' => $status_id,
            'user_id' => $user_id,
            'product_id' => $product_id,
            'payment_id' => $payment_id,
            'totalAmount' => $totalAmount,
            'isPaid' => $isPaid
        ];
    }
}