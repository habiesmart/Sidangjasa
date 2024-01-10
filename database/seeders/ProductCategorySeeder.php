<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        foreach (config('constants.product_category') as $key => $val) {
            $data[$key]["name"] = $val;
            $data[$key]["order"] = $key + 1;
            $data[$key]['created_at'] = date('Y-m-d H:i:s');
            $data[$key]['updated_at']= date('Y-m-d H:i:s');
        }
        
        ProductCategory::insert($data);
    }
}
