<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'currency' => 'EUR',
            ],
            [
                'currency' => 'USD',
            ],
            [
                'currency' => 'UAH',
            ],
            [
                'currency' => 'RON',
            ],
            [
                'currency' => 'RUB',
            ],
            [
                'currency' => 'MDL',
            ],
        ];

        Currency::query()->insert($data);
    }
}
