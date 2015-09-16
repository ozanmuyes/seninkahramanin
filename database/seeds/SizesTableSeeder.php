<?php

use Illuminate\Database\Seeder;

use App\Size;

class SizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sizes = [
            [
                "name" => "xs",
                "description" => "Çok Küçük"
            ],
            [
                "name" => "xs slim fit",
                "description" => "Çok Küçük - Dar Kesim"
            ],
            [
                "name" => "s",
                "description" => "Küçük"
            ],
            [
                "name" => "s slim fit",
                "description" => "Küçük - Dar Kesim"
            ],
            [
                "name" => "m",
                "description" => "Orta"
            ],
            [
                "name" => "m slim fit",
                "description" => "Orta - Dar Kesim"
            ],
            [
                "name" => "l",
                "description" => "Büyük"
            ],
            [
                "name" => "l slim fit",
                "description" => "Büyük - Dar Kesim"
            ],
            [
                "name" => "xl",
                "description" => "Çok Büyük"
            ],
            [
                "name" => "xl slim fit",
                "description" => "Çok Büyük - Dar Kesim"
            ],
            [
                "name" => "xxl",
                "description" => "Çok Çok Büyük"
            ],
            [
                "name" => "xxl slim fit",
                "description" => "Çok Çok Büyük - Dar Kesim Büyük"
            ]
        ];

        foreach ($sizes as $size) {
            Size::create([
                "name" => $size["name"],
                "description" => $size["description"]
            ]);
        }
    }
}
