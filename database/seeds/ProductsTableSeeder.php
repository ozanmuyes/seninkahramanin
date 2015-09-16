<?php

use Illuminate\Database\Seeder;

use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                "size_id" => 1,
                "name" => "Foo 1",
                "sex" => "male"
            ],
            [
                "size_id" => 6,
                "name" => "Bar 1",
                "sex" => "female"
            ],
            [
                "size_id" => 3,
                "name" => "Baz 1",
                "sex" => "female"
            ],
            [
                "size_id" => 11,
                "name" => "Bar 2",
                "sex" => "male"
            ],
            [
                "size_id" => 7,
                "name" => "Qux 1",
                "sex" => "female"
            ],
            [
                "size_id" => 1,
                "name" => "Baz 2",
                "sex" => "male"
            ],
            [
                "size_id" => 9,
                "name" => "Thud 1",
                "sex" => "child (unisex)"
            ],
            [
                "size_id" => 8,
                "name" => "Bar 3",
                "sex" => "female"
            ],
            [
                "size_id" => 7,
                "name" => "Baz 3",
                "sex" => "female"
            ],
            [
                "size_id" => 8,
                "name" => "Qux 2",
                "sex" => "child (unisex)"
            ],
            [
                "size_id" => 11,
                "name" => "Foo 2",
                "sex" => "male"
            ],
            [
                "size_id" => 12,
                "name" => "Baz 4",
                "sex" => "female"
            ]
        ];

        foreach ($products as $product) {
            Product::create([
                "size_id" => $product["size_id"],
                "name" => $product["name"],
                "sex" => $product["sex"]
            ]);
        }
    }
}
