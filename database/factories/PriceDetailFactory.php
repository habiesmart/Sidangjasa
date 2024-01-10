<?php

namespace Database\Factories;

use App\Models\Tier;
use App\Models\Price;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PriceDetail>
 */
class PriceDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $is_tier = fake()->boolean();
        $tier_id = ($is_tier) ? fake()->randomElement(Tier::pluck('id')->toArray()) : null;
        return [
            'is_tier' => $is_tier,
            'tier_id' => $tier_id,
            'price' => fake()->numberBetween(500, 1000000)
        ];
    }
}
