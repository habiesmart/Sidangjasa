<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\CartDetail;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cart::factory(1)
        ->has(CartDetail::factory(10))->create();
    }
}
