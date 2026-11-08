<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductDemoSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::pluck('id', 'name');

        $products = [
            [
                'category_id' => $categories['Minuman'],
                'code' => 'PRD-MNM-001',
                'name' => 'Air Mineral Botol 600ml',
                'unit' => 'botol',
                'price' => 4000,
                'stock' => 120,
            ],
            [
                'category_id' => $categories['Minuman'],
                'code' => 'PRD-MNM-002',
                'name' => 'Teh Melati Botol 350ml',
                'unit' => 'botol',
                'price' => 5000,
                'stock' => 80,
            ],
            [
                'category_id' => $categories['Minuman'],
                'code' => 'PRD-MNM-003',
                'name' => 'Susu UHT Cokelat 250ml',
                'unit' => 'kotak',
                'price' => 7000,
                'stock' => 60,
            ],
            [
                'category_id' => $categories['Makanan Ringan'],
                'code' => 'PRD-SNK-001',
                'name' => 'Keripik Kentang Original 68g',
                'unit' => 'bungkus',
                'price' => 12000,
                'stock' => 45,
            ],
            [
                'category_id' => $categories['Makanan Ringan'],
                'code' => 'PRD-SNK-002',
                'name' => 'Biskuit Cokelat 120g',
                'unit' => 'bungkus',
                'price' => 9500,
                'stock' => 50,
            ],
            [
                'category_id' => $categories['Kebutuhan Rumah Tangga'],
                'code' => 'PRD-RMT-001',
                'name' => 'Sabun Cuci Piring 800ml',
                'unit' => 'botol',
                'price' => 18000,
                'stock' => 30,
            ],
            [
                'category_id' => $categories['Kebutuhan Rumah Tangga'],
                'code' => 'PRD-RMT-002',
                'name' => 'Detergen Bubuk 1kg',
                'unit' => 'bungkus',
                'price' => 27000,
                'stock' => 20,
            ],
            [
                'category_id' => $categories['Sembako & Bahan Pokok'],
                'code' => 'PRD-SBK-008',
                'name' => 'Kecap Manis 520ml',
                'unit' => 'botol',
                'price' => 21000,
                'stock' => 35,
            ],
            [
                'category_id' => $categories['Sembako & Bahan Pokok'],
                'code' => 'PRD-SBK-009',
                'name' => 'Mie Instan Goreng',
                'unit' => 'bungkus',
                'price' => 3500,
                'stock' => 100,
            ],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(
                ['code' => $product['code']],
                $product
            );
        }
    }
}
