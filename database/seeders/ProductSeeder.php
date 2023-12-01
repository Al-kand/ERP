<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'article' => 'mtokb2',
                'name' => 'MTOK-B2/216-1KT3645-K',
                'status' => 'available',
                'data' => [
                    'Цвет' => 'черный',
                    'Размер' => 'L'
                ]
            ],
            [
                'article' => 'mtokb3',
                'name' => 'MTOK-B3/216-1KT3645-K',
                'status' => 'unavailable',
                'data' => [
                    'Цвет' => 'серый',
                    'Размер' => 'XL'
                ]
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
