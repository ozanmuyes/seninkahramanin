<?php

use Illuminate\Database\Seeder;

use App\Price;
use App\Product;

use Carbon\Carbon;

class PricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prices = [
            [
                "product_id" => 1,
                "amount" => 39.90,
                "started_at" => Carbon::now(),
                "finished_at" => null
            ],
            [
                "product_id" => 2,
                "amount" => 49.90,
                "started_at" => Carbon::now(),
                "finished_at" => null
            ],
            [
                "product_id" => 3,
                "amount" => 69.90,
                "started_at" => Carbon::now(),
                "finished_at" => null
            ],
            [
                "product_id" => 4,
                "amount" => 39.90,
                "started_at" => Carbon::now(),
                "finished_at" => null
            ],
            [
                "product_id" => 5,
                "amount" => 49.90,
                "started_at" => Carbon::now(),
                "finished_at" => null
            ],
            [
                "product_id" => 6,
                "amount" => 69.90,
                "started_at" => Carbon::now(),
                "finished_at" => null
            ],

            // [
            //     "product_id" => 1,
            //     "amount" => 7.89,
            //     "started_at" => Carbon::now(),
            //     "finished_at" => Carbon::now()->addDay(7)
            // ],
            // [
            //     "product_id" => 1,
            //     "amount" => 9.99,
            //     "started_at" => Carbon::now()->addDay(7),
            //     "finished_at" => Carbon::now()->addDay(10)
            // ],
            // [
            //     "product_id" => 1,
            //     "amount" => 12,
            //     "started_at" => Carbon::now(),
            //     "finished_at" => null
            // ],
            // [
            //     "product_id" => 2,
            //     "amount" => (mt_rand(100, 5000) / 100),
            //     "started_at" => Carbon::now(),
            //     "finished_at" => Carbon::now()->addDay(5)
            // ],
            // [
            //     "product_id" => 2,
            //     "amount" => (mt_rand(100, 5000) / 100),
            //     "started_at" => Carbon::now()->addDay(5),
            //     "finished_at" => null
            // ],
            // [
            //     "product_id" => 3,
            //     "amount" => (mt_rand(100, 5000) / 100),
            //     "started_at" => Carbon::now(),
            //     "finished_at" => Carbon::now()->addDay(2)
            // ],
            // [
            //     "product_id" => 3,
            //     "amount" => (mt_rand(100, 5000) / 100),
            //     "started_at" => Carbon::now()->addDay(2),
            //     "finished_at" => null
            // ],
            // [
            //     "product_id" => 4,
            //     "amount" => (mt_rand(100, 5000) / 100),
            //     "started_at" => Carbon::now(),
            //     "finished_at" => null
            // ],
            // [
            //     "product_id" => 5,
            //     "amount" => 17.89,
            //     "started_at" => Carbon::now(),
            //     "finished_at" => Carbon::now()->addDay(7)
            // ],
            // [
            //     "product_id" => 5,
            //     "amount" => 19.99,
            //     "started_at" => Carbon::now()->addDay(7),
            //     "finished_at" => Carbon::now()->addDay(10)
            // ],
            // [
            //     "product_id" => 5,
            //     "amount" => 14,
            //     "started_at" => Carbon::now(),
            //     "finished_at" => null
            // ],
            // [
            //     "product_id" => 6,
            //     "amount" => (mt_rand(100, 5000) / 100),
            //     "started_at" => Carbon::now(),
            //     "finished_at" => Carbon::now()->addDay(5)
            // ],
            // [
            //     "product_id" => 6,
            //     "amount" => (mt_rand(100, 5000) / 100),
            //     "started_at" => Carbon::now()->addDay(5),
            //     "finished_at" => null
            // ],
            // [
            //     "product_id" => 7,
            //     "amount" => (mt_rand(100, 5000) / 100),
            //     "started_at" => Carbon::now(),
            //     "finished_at" => Carbon::now()->addDay(2)
            // ],
            // [
            //     "product_id" => 7,
            //     "amount" => (mt_rand(100, 5000) / 100),
            //     "started_at" => Carbon::now()->addDay(2),
            //     "finished_at" => null
            // ],
            // [
            //     "product_id" => 8,
            //     "amount" => (mt_rand(100, 5000) / 100),
            //     "started_at" => Carbon::now(),
            //     "finished_at" => null
            // ],
            // [
            //     "product_id" => 9,
            //     "amount" => (mt_rand(100, 5000) / 100),
            //     "started_at" => Carbon::now(),
            //     "finished_at" => Carbon::now()->addDay(2)
            // ],
            // [
            //     "product_id" => 9,
            //     "amount" => (mt_rand(100, 5000) / 100),
            //     "started_at" => Carbon::now()->addDay(2),
            //     "finished_at" => null
            // ],
            // [
            //     "product_id" => 10,
            //     "amount" => (mt_rand(100, 5000) / 100),
            //     "started_at" => Carbon::now(),
            //     "finished_at" => null
            // ],
            // [
            //     "product_id" => 11,
            //     "amount" => (mt_rand(100, 5000) / 100),
            //     "started_at" => Carbon::now(),
            //     "finished_at" => null
            // ],
            // [
            //     "product_id" => 12,
            //     "amount" => (mt_rand(100, 5000) / 100),
            //     "started_at" => Carbon::now(),
            //     "finished_at" => null
            // ]
        ];

        foreach ($prices as $price) {
            $price = Price::create([
                "product_id" => $price["product_id"],
                "amount" => $price["amount"],
                "started_at" => $price["started_at"],
                "finished_at" => $price["finished_at"]
            ]);
        }
    }
}
