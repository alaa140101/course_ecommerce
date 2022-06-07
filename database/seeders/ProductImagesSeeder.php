<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Arr;
use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\Product;



class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images[] = ['file_name' => '01.jpg', 'file_type' => 'image/jpg', 'file_size' => rand(10, 900), 'file_status' => true, 'file_sort' => 0];
        $images[] = ['file_name' => '02.jpg', 'file_type' => 'image/jpg', 'file_size' => rand(10, 900), 'file_status' => true, 'file_sort' => 0];
        $images[] = ['file_name' => '03.jpg', 'file_type' => 'image/jpg', 'file_size' => rand(10, 900), 'file_status' => true, 'file_sort' => 0];
        $images[] = ['file_name' => '04.jpg', 'file_type' => 'image/jpg', 'file_size' => rand(10, 900), 'file_status' => true, 'file_sort' => 0];
        $images[] = ['file_name' => '05.jpg', 'file_type' => 'image/jpg', 'file_size' => rand(10, 900), 'file_status' => true, 'file_sort' => 0];
        $images[] = ['file_name' => '06.jpg', 'file_type' => 'image/jpg', 'file_size' => rand(10, 900), 'file_status' => true, 'file_sort' => 0];
        $images[] = ['file_name' => '07.jpg', 'file_type' => 'image/jpg', 'file_size' => rand(10, 900), 'file_status' => true, 'file_sort' => 0];
        $images[] = ['file_name' => '08.jpg', 'file_type' => 'image/jpg', 'file_size' => rand(10, 900), 'file_status' => true, 'file_sort' => 0];

        Product::all()->each(function ($product) use ($images) {
            $product->media()->createMany(Arr::random($images, rand(2, 3)));
        });
    }
}
