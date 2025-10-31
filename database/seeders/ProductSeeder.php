<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Очищаем таблицу перед заполнением
        Product::truncate();

        $products = [
            [
                'name' => 'iPhone 15 Pro',
                'description' => 'Новейший флагманский смартфон от Apple с титановым корпусом',
                'price' => 99990,
                'amount' => 5
            ],
            [
                'name' => 'Samsung Galaxy S24',
                'description' => 'Инновационный смартфон с искусственным интеллектом',
                'price' => 79990,
                'amount' => 8
            ],
            [
                'name' => 'MacBook Air M3',
                'description' => 'Ультратонкий ноутбук с чипом Apple M3',
                'price' => 129990,
                'amount' => 3
            ],
            [
                'name' => 'Sony WH-1000XM5',
                'description' => 'Беспроводные наушники с продвинутым шумоподавлением',
                'price' => 34990,
                'amount' => 0
            ],
            [
                'name' => 'iPad Air',
                'description' => null,
                'price' => 59990,
                'amount' => 10
            ]
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
