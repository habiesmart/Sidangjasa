<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
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
        $cash = fake()->numberBetween($grand_total, $max);
        $change = $cash - $grand_total;

        return [
            'customer_id' => fake()->randomElement(Customer::pluck('id')->toArray()),
            'receipt_number' => fake()->word() . fake()->ean8(),
            'grand_total' => $grand_total,
            'cash' => $cash,
            'change' => $change
        ];
    }
}
