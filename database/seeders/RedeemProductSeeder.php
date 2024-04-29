<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RedeemProduct;

class RedeemProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RedeemProduct::create([
            'name' => 'Recycle Product',
            'image' => 'recycleProduct.JPG',
            'description' => 61000,
            'price_point' => 50,
            'stock' => 150
        ]);
        RedeemProduct::create([
            'name' => 'Recycle Product',
            'image' => 'recycleProduct.JPG',
            'description' => 61000,
            'price_point' => 50,
            'stock' => 150
        ]);
        RedeemProduct::create([
            'name' => 'Recycle Product',
            'image' => 'recycleProduct.JPG',
            'description' => 61000,
            'price_point' => 50,
            'stock' => 150
        ]);
        RedeemProduct::create([
            'name' => 'Recycle Product',
            'image' => 'recycleProduct.JPG',
            'description' => 61000,
            'price_point' => 50,
            'stock' => 150
        ]);
        RedeemProduct::create([
            'name' => 'Recycle Product',
            'image' => 'recycleProduct.JPG',
            'description' => 61000,
            'price_point' => 50,
            'stock' => 150
        ]);
        RedeemProduct::create([
            'name' => 'Recycle Product',
            'image' => 'recycleProduct.JPG',
            'description' => 61000,
            'price_point' => 50,
            'stock' => 150
        ]);
    }
}
