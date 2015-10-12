<?php

use Illuminate\Database\Seeder;

use App\Image;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            [
                "directory" => "users",
                "name" => "mutlu-erdem",
                "extension" => "jpg",
                "title" => null,
                "alt" => "Mutlu Erdem Profil Fotoğrafı",
                "width" => 128,
                "height" => 128,
                "size" => 36864,
                "user" => [
                    "id" => 1
                ],
                "slider" => [
                    "id" => null,
                    "order" => null,
                    "title" => null,
                    "subtitle" => null,
                    "link" => null
                ],
                "product" => [
                    "id" => null
                ]
            ],
            [
                "directory" => "users",
                "name" => "mutlu-erdem-48",
                "extension" => "jpg",
                "title" => null,
                "alt" => "Mutlu Erdem Küçük Profil Fotoğrafı",
                "width" => 48,
                "height" => 48,
                "size" => 13954,
                "user" => [
                    "id" => 1
                ],
                "slider" => [
                    "id" => null,
                    "order" => null,
                    "title" => null,
                    "subtitle" => null,
                    "link" => null
                ],
                "product" => [
                    "id" => null
                ]
            ],
            [
                "directory" => "users",
                "name" => "mutlu-erdem-256",
                "extension" => "jpg",
                "title" => null,
                "alt" => "Mutlu Erdem Büyük Profil Fotoğrafı",
                "width" => 256,
                "height" => 256,
                "size" => 36099,
                "user" => [
                    "id" => 1
                ],
                "slider" => [
                    "id" => null,
                    "order" => null,
                    "title" => null,
                    "subtitle" => null,
                    "link" => null
                ],
                "product" => [
                    "id" => null
                ]
            ],
            [
                "directory" => "users",
                "name" => "ozan-muyesseroglu",
                "extension" => "jpg",
                "title" => null,
                "alt" => "Ozan Müyesseroğlu Profil Fotoğrafı",
                "width" => 128,
                "height" => 128,
                "size" => 24452,
                "user" => [
                    "id" => 2
                ],
                "slider" => [
                    "id" => null,
                    "order" => null,
                    "title" => null,
                    "subtitle" => null,
                    "link" => null
                ],
                "product" => [
                    "id" => null
                ]
            ],
            [
                "directory" => "users",
                "name" => "ozan-muyesseroglu-48",
                "extension" => "jpg",
                "title" => null,
                "alt" => "Ozan Müyesseroğlu Küçük Profil Fotoğrafı",
                "width" => 48,
                "height" => 48,
                "size" => 14112,
                "user" => [
                    "id" => 2
                ],
                "slider" => [
                    "id" => null,
                    "order" => null,
                    "title" => null,
                    "subtitle" => null,
                    "link" => null
                ],
                "product" => [
                    "id" => null
                ]
            ],
            [
                "directory" => "users",
                "name" => "ozan-muyesseroglu-256",
                "extension" => "jpg",
                "title" => null,
                "alt" => "Ozan Müyesseroğlu Profil Fotoğrafı",
                "width" => 256,
                "height" => 256,
                "size" => 37568,
                "user" => [
                    "id" => 2
                ],
                "slider" => [
                    "id" => null,
                    "order" => null,
                    "title" => null,
                    "subtitle" => null,
                    "link" => null
                ],
                "product" => [
                    "id" => null
                ]
            ],
            [
                "directory" => null,
                "name" => "foo",
                "extension" => "gif",
                "title" => null,
                "alt" => "Slider Image 1",
                "width" => 1920,
                "height" => 400,
                "size" => 4096,
                "user" => [
                    "id" => null
                ],
                "slider" => [
                    "id" => null,
                    "order" => null,
                    "title" => null,
                    "subtitle" => null,
                    "link" => null
                ],
                "product" => [
                    "id" => 7
                ]
            ],
            [
                "directory" => null,
                "name" => "bar",
                "extension" => "gif",
                "title" => null,
                "alt" => "Slider Image 2",
                "width" => 1920,
                "height" => 400,
                "size" => 4096,
                "user" => [
                    "id" => null
                ],
                "slider" => [
                    "id" => 1,
                    "order" => null,
                    "title" => null,
                    "subtitle" => null,
                    "link" => null
                ],
                "product" => [
                    "id" => null
                ]
            ],
            [
                "directory" => null,
                "name" => "baz",
                "extension" => "gif",
                "title" => null,
                "alt" => "Slider Image 3",
                "width" => 1920,
                "height" => 400,
                "size" => 4096,
                "user" => [
                    "id" => null
                ],
                "slider" => [
                    "id" => 1,
                    "order" => null,
                    "title" => null,
                    "subtitle" => null,
                    "link" => "//google.com"
                ],
                "product" => [
                    "id" => null
                ]
            ],
            [
                "directory" => null,
                "name" => "qux",
                "extension" => "gif",
                "title" => null,
                "alt" => "Slider Image 4",
                "width" => 1920,
                "height" => 400,
                "size" => 4096,
                "user" => [
                    "id" => null
                ],
                "slider" => [
                    "id" => 1,
                    "order" => null,
                    "title" => null,
                    "subtitle" => null,
                    "link" => "//facebook.com"
                ],
                "product" => [
                    "id" => null
                ]
            ],

            [
                "directory" => null,
                "name" => "product1",
                "extension" => "jpg",
                "title" => "Product 1",
                "alt" => "Product 1 Image",
                "width" => 406,
                "height" => 480,
                "size" => 36864,
                "user" => [
                    "id" => null
                ],
                "slider" => [
                    "id" => null,
                    "order" => null,
                    "title" => null,
                    "subtitle" => null,
                    "link" => null
                ],
                "product" => [
                    "id" => 1
                ]
            ],
            [
                "directory" => null,
                "name" => "product2",
                "extension" => "jpg",
                "title" => "Product 2",
                "alt" => "Product 2 Image",
                "width" => 404,
                "height" => 480,
                "size" => 4096,
                "user" => [
                    "id" => null
                ],
                "slider" => [
                    "id" => null,
                    "order" => null,
                    "title" => null,
                    "subtitle" => null,
                    "link" => null
                ],
                "product" => [
                    "id" => 2
                ]
            ]
        ];

        foreach ($images as $image) {
            $newImage = Image::create([
                "directory" => $image["directory"],
                "name" => $image["name"],
                "extension" => $image["extension"],
                "title" => $image["title"],
                "alt" => $image["alt"],
                "width" => $image["width"],
                "height" => $image["height"],
                "size" => $image["size"]
            ]);

            if ($image["user"]["id"] !== null) {
                App\User::find($image["user"]["id"])->pictures()->attach($newImage);
            }

            // if ($image["slider"]["id"] !== null) {
            //     // $newSliderImages = App\SliderImages::create([
            //     //     "slider_id" => $image["slider"]["id"],
            //     //     // Since this is the initial of this particular ImageSlider
            //     //     // record, images order is what was given - we do NOT care
            //     //     // the order. But after re-ordering the images, since their
            //     //     // order is set, we will write these values to the table.
            //     //     "order" => $image["slider"]["order"] ?: 0,
            //     //     "title" => $image["slider"]["title"],
            //     //     "subtitle" => $image["slider"]["subtitle"],
            //     //     "link" => $image["slider"]["link"]
            //     // ]);

            //     // $newSliderImages->images()->attach($newImage);

            //     App\Slider::find($image["slider"]["id"])->images = $image["slider"];
            // }

            if ($image["product"]["id"] !== null) {
                App\Product::find($image["product"]["id"])->images()->attach($newImage);
            }
        }
    }
}
