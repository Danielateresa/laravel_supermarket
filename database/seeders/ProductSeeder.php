<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 16; $i++) {
            $new_product = new Product();
            $new_product->code = $faker->randomnumber(6, true);
            $new_product->name = $faker->words(3, true);
            $new_product->price = $faker->randomfloat(2, 0, 99);
            $new_product->description = $faker->paragraph();
            $new_product->img = $faker->imageUrl(640, 480, 'products', true);
            $new_product->save();
        }
    }
}