<?php

namespace Database\Factories;

use App\Models\Cart;
use App\Repositories\ProductRepo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CartDetail>
 */
class CartDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $productRepo = new ProductRepo();
        $product = $productRepo->get(fake()->randomElement(Cart::pluck('id')->toArray()));

        return [
            'product_id' => $product->id,
            'quantity' => fake()->numberBetween(1, 200),
            'price' => $product->prices()->first()->priceDetails()->first()->price,
        ];
    }
}
