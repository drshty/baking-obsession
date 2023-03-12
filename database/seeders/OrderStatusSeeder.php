<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            'Pending',
            'Processing',
            'Completed',
            'Cancelled',
            'Refunded',
            'On hold',
            'Failed',
            'Shipped',
            'Delivered',
            'Returned',
            'Out For Delivery',
            'Hold For Pickup',
            'Ready For Pickup'
        ];
        foreach ($statuses as $status)
            OrderStatus::create([
                'name' => $status
            ]);
    }
}