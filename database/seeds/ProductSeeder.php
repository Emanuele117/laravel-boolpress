<?php

use App\Models\Product;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15; $i++) { 
            $_product = new Product();
            $_product->name = $faker->sentence();
            $_product->image = $faker->imageUrl(600, 400, 'Products');
            $_product->price = $faker->randomFloat(2, 100, 300);
            $_product->description = $faker->text();
            $_product->save();

        }
    }
}
