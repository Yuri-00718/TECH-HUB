<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(
            [
                'user_id' => 1,
                'product_name' => "Msi B550 Elite",
                'price' => 20.000,
                'img' => 'B-Pc1.jpg'
            ]
        );

    }
}
