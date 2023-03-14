<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PaymentType;

class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            'Credit Card',
            'Debit Card',
            'PayPal',
            'Apple Pay',
            'Google Pay',
            'Amazon Pay',
            'Venmo',
            'Zelle',
            'Cash',
            'Bank transfer'
        ];
        
        foreach ($names as $name)
            PaymentType::create([
                'name' => $name
            ]);
    }
}