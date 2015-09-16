<?php

use Illuminate\Database\Seeder;

use App\Slider;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([
            "name" => "Anasayfa"
        ]);
    }
}
