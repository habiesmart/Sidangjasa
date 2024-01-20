<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cart>
 */
class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $max = 1000000;
        $grand_total = fake()->numberBetween(500, $max);

        return [
            'customer_id' => fake()->randomElement(Customer::pluck('id')->toArray()),
            'grand_total' => $grand_total
        ];
    }
}
