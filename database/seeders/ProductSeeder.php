<?php

namespace Database\Seeders;

use App\Models\Label;
use App\Models\Price;
use App\Models\Product;
use App\Models\PriceDetail;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory(10)
        ->has(Label::factory(5))
        ->has(Price::factory(3)->has(PriceDetail::factory(3)))
        ->create();
    }
}
