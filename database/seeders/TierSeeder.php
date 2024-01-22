<?php

namespace Database\Seeders;

use App\Models\Tier;
use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tier::factory(50)
            ->has(Customer::factory(10))
            ->create();
    }
}
