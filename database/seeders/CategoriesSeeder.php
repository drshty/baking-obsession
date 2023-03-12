<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryNames = [
            'Bread',
            'Cake',
            'Pastry',
            'Cookie',
            'Muffin',
            'Bagel',
            'Croissant',
            'Donut',
            'Pretzel',
            'Scone',
            'Roll',
            'Tart',
            'Pie',
            'Biscuit',
            'Cupcake',
            'Brownie',
            'Macaron',
            'Bun',
            'Cinnamon Roll',
            'Danish',
            'Eclair',
            'Focaccia',
            'Fruitcake',
            'Gingerbread',
            'Pancake',
            'Waffle'
        ];

        foreach ($categoryNames as $name) {
            Category::create([
                'name' => $name
            ]);
        }
    }
}