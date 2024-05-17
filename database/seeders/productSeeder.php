<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Models\Product([
            'name' => 'Product #1',
            'location' => 'Product #1 details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #2',
            'location' => 'Product #2 details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #3',
            'location' => 'Product #3 details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #4',
            'location' => 'Product #4 details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #5',
            'location' => 'Product #5 details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #6',
            'location' => 'Product #6 details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #7',
            'location' => 'Product #7 details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #8',
            'location' => 'Product #8 details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #9',
            'location' => 'Product #9 details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name' => 'Product #10',
            'location' => 'Product #10 details'
        ]);
        $product->save();
    }
}
