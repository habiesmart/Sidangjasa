<?php

namespace Database\Seeders;

use App\Models\Tier;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tier::factory()
            ->count(50)
            ->create();
    }
}
