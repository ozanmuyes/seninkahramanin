<?php

use Illuminate\Database\Seeder;

use App\Order;

use Carbon\Carbon;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = [
            [
                "address_id" => 1,
                "rejected_at" => null,
                "printing_at" => null,
                "shipped_at" => null,
                "delivered_at" => null,
                "products" => [
                    [
                        "id" => 1,
                        "quantity" => 3
                    ]
                ]
            ],
            [
                "address_id" => 3,
                "rejected_at" => Carbon::now(),
                "printing_at" => null,
                "shipped_at" => null,
                "delivered_at" => null,
                "products" => [
                    [
                        "id" => 2,
                        "quantity" => 1
                    ]
                ]
            ],
            [
                "address_id" => 4,
                "rejected_at" => null,
                "printing_at" => null,
                "shipped_at" => null,
                "delivered_at" => null,
                "products" => [
                    [
                        "id" => 7,
                        "quantity" => 4
                    ],
                    [
                        "id" => 8,
                        "quantity" => 5
                    ]
                ]
            ],
            [
                "address_id" => 2,
                "rejected_at" => null,
                "printing_at" => null,
                "shipped_at" => null,
                "delivered_at" => null,
                "products" => [
                    [
                        "id" => 5,
                        "quantity" => 3
                    ]
                ]
            ],
            [
                "address_id" => 5,
                "rejected_at" => null,
                "printing_at" => null,
                "shipped_at" => null,
                "delivered_at" => null,
                "products" => [
                    [
                        "id" => 1,
                        "quantity" => 2
                    ]
                ]
            ],
            [
                "address_id" => 5,
                "rejected_at" => null,
                "printing_at" => null,
                "shipped_at" => null,
                "delivered_at" => null,
                "products" => [
                    [
                        "id" => 12,
                        "quantity" => 1
                    ]
                ]
            ]
        ];

        foreach ($orders as $order) {
            $newOrder = Order::create([
                "address_id" => $order["address_id"],
                "rejected_at" => $order["rejected_at"],
                "printing_at" => $order["printing_at"],
                "shipped_at" => $order["shipped_at"],
                "delivered_at" => $order["delivered_at"],
            ]);

            foreach ($order["products"] as $product) {
                $newOrder->products()->attach($product["id"], [
                    "quantity" => $product["quantity"]
                ]);
            }
        }
    }
}
