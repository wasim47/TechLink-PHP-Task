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
        Product::create([
            'title'     => 'Smartphone',
            'brand'     => 'Samsung',
            'sellPrice' => 28000,
            'rating'    => 4,
            'reviews'   => 12,
            'img'       => 'smartphone.jpg',
            'orders'    => 0,
            'mrp'       => '30000 BDT',
            'discount'  => 0,
            'category'  => 'Mobile',
        ]);

        Product::create([
            'title'     => 'Smartphone',
            'brand'     => 'Samsung',
            'sellPrice' => 28000,
            'rating'    => 4,
            'reviews'   => 12,
            'img'       => 'smartphone.jpg',
            'orders'    => 0,
            'mrp'       => '30000 BDT',
            'discount'  => 0,
            'category'  => 'Mobile',
        ]);
    }
}
