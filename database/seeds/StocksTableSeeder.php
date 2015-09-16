<?php

use Illuminate\Database\Seeder;

use App\Stock;

use Carbon\Carbon;

class StocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stocks = [
            [
                "product_id" => 1,
                "quantity" => 100,
                "remaining" => mt_rand(0, 100),
                "started_at" => Carbon::now(),
                "finished_at" => Carbon::now()->addDay(7)
            ],
            [
                "product_id" => 1,
                "quantity" => 100,
                "remaining" => mt_rand(0, 100),
                "started_at" => Carbon::now()->addDay(7),
                "finished_at" => Carbon::now()->addDay(10)
            ],
            [
                "product_id" => 1,
                "quantity" => 100,
                "remaining" => mt_rand(0, 100),
                "started_at" => Carbon::now()->addDay(5),
                "finished_at" => null
            ],
            [
                "product_id" => 2,
                "quantity" => 100,
                "remaining" => mt_rand(0, 100),
                "started_at" => Carbon::now()->addDay(5),
                "finished_at" => null
            ],
            [
                "product_id" => 3,
                "quantity" => 100,
                "remaining" => mt_rand(0, 100),
                "started_at" => Carbon::now(),
                "finished_at" => null
            ],
            [
                "product_id" => 4,
                "quantity" => 100,
                "remaining" => mt_rand(0, 100),
                "started_at" => Carbon::now(),
                "finished_at" => Carbon::now()->addDay(5)
            ],
            [
                "product_id" => 5,
                "quantity" => 100,
                "remaining" => mt_rand(0, 100),
                "started_at" => Carbon::now()->addDay(5),
                "finished_at" => null
            ],
            [
                "product_id" => 6,
                "quantity" => 100,
                "remaining" => mt_rand(0, 100),
                "started_at" => Carbon::now(),
                "finished_at" => Carbon::now()->addDay(2)
            ],
            [
                "product_id" => 7,
                "quantity" => 100,
                "remaining" => mt_rand(0, 100),
                "started_at" => Carbon::now()->addDay(2),
                "finished_at" => null
            ],
            [
                "product_id" => 8,
                "quantity" => 100,
                "remaining" => mt_rand(0, 100),
                "started_at" => Carbon::now(),
                "finished_at" => null
            ],
            [
                "product_id" => 9,
                "quantity" => 100,
                "remaining" => mt_rand(0, 100),
                "started_at" => Carbon::now(),
                "finished_at" => null
            ],
            [
                "product_id" => 10,
                "quantity" => 100,
                "remaining" => mt_rand(0, 100),
                "started_at" => Carbon::now(),
                "finished_at" => null
            ],
            [
                "product_id" => 11,
                "quantity" => 100,
                "remaining" => mt_rand(0, 100),
                "started_at" => Carbon::now(),
                "finished_at" => null
            ],
            [
                "product_id" => 12,
                "quantity" => 100,
                "remaining" => mt_rand(0, 100),
                "started_at" => Carbon::now(),
                "finished_at" => null
            ]
        ];

        foreach ($stocks as $stock) {
            Stock::create([
                "product_id" => $stock["product_id"],
                "quantity" => $stock["quantity"],
                "remaining" => $stock["remaining"],
                "started_at" => $stock["started_at"],
                "finished_at" => $stock["finished_at"]
            ]);
        }
    }
}
