<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = \Faker\Factory::create();
        $product->addProvider(new \FakerEcommerce\Ecommerce($product));


        // Now lets run the loop to populate our database
        for ($i = 0; $i < 10; $i++) {
            Product::create([
                'name'         => $product->laptops(),
                'quantity'     => $product->numberBetween(1, 100),
            ]);
        }
    }
}
