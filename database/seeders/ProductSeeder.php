<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $products = Product::factory(1000)->create();

        // $chunks = array_chunk($products, 100);
        // $chunks = $products->chunk(100);

        // foreach ($chunks as $chunk) {
        //    DB::table('products')->insert($chunk->toArray());
        // }

        
    }
}
