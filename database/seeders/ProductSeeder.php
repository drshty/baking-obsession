<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $image_id = rand(1, 500);

        $products = [
            [
                'category_id' => 1,
                'name' => 'White Bread',
                'description' => 'Soft and fluffy bread made from white flour.',
                'price' => 2.99,
                'image_url' => "https://picsum.photos/id/{$image_id}/200/200",
                'isAvailable' => true,
            ],
            [
                'category_id' => 1,
                'name' => 'Whole Wheat Bread',
                'description' => 'Healthy bread made from whole wheat flour.',
                'price' => 3.99,
                'image_url' => "https://picsum.photos/id/{$image_id}/200/200",
                'isAvailable' => true,
            ],
            [
                'category_id' => 2,
                'name' => 'Chocolate Cake',
                'description' => 'Decadent chocolate cake with rich frosting.',
                'price' => 24.99,
                'image_url' => "https://picsum.photos/id/{$image_id}/200/200",
                'isAvailable' => true,
            ],
            [
                'category_id' => 2,
                'name' => 'Vanilla Cake',
                'description' => 'Classic vanilla cake with vanilla frosting.',
                'price' => 19.99,
                'image_url' => "https://picsum.photos/id/{$image_id}/200/200",
                'isAvailable' => true,
            ],
        ];

        DB::table('products')->insert($products);
    }
}