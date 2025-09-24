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
            [
                'name' => 'basreng',
                'description' => 'basreng mang',
                'price' => 3000,
                'stock' => 1000,
            ],
            [
                'name' => 'nuget',
                'description' => 'nuget woi',
                'price' => 5000,
                'stock' => 1000,
            ],
            [
                'name' => 'basmut',
                'description' => 'basmut imut',
                'price' => 2000,
                'stock' => 1000,
            ],
            
        ]);
    }
}