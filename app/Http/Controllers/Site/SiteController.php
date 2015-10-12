<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App;
use Auth;
use Cart;
use Flash;
use Mail;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view("site.index");
    }

    /**
     * Display design page
     *
     * @return Response
     */
    public function design()
    {
        $sexes = [
            [
                "name" => "Kadın",
                "image" => [
                    "path" => "female.jpg",
                    "alt" => "Kadın Resmi"
                ],
                "onClick" => "selectSex();return;"
            ],
            [
                "name" => "Erkek",
                "image" => [
                    "path" => "male.jpg",
                    "alt" => "Erkek Resmi"
                ],
                "onClick" => "selectSex();return;"
            ]
        ];
        $products = App\Product::all();

        return view("site.design")->with([
            "sexes" => json_decode(json_encode($sexes)),
            "products" => $products
        ]);
    }

    /**
     * Display guide page
     *
     * @return Response
     */
    public function guide()
    {
        return view("site.guide");

        // For test purposes add random product at random quantity to the cart
        //
        $productId = mt_rand(1, 12);
        $quantity = mt_rand(1, 7);

        $product = App\Product::with(["prices", "images"])->where(["id" => $productId])->first();

        Cart::add(
            $product->id,
            $product->name,
            $product->price->withoutCurrency,
            $quantity,
            [
                "currency" => $product->price->currency,
                "image" => [
                    // "path" => count($product->images) > 0
                    //     ? $product->images[0]->path
                    //     : null,
                    "path" => "img/product1.jpg",
                    "alt" => count($product->images) > 0
                        ? $product->images[0]->alt
                        : null,
                ],
                "sex" => $product->sex
            ],
            []
        );

        Flash::success("Product '" . $product->name . "' added to cart.");

        return redirect(route("Site.Index"));
    }

    /**
     * Display about us page
     *
     * @return Response
     */
    public function aboutUs()
    {
        return view("site.about_us");
    }

    public function foo()
    {
        $sender = [
            "address" => "no-reply@seninkahramanin.com",
            "name" => "Senin Kahramanın"
        ];

        $content = "Yeni kampanya haberi.";

        Mail::send("emails.no-reply", ["content" => $content], function ($mail) use ($sender) {
            $mail->from($sender["address"], $sender["name"]);
            $mail->to("ozi5169@gmail.com");
            $mail->subject("No-Reply Test 3");
        });
    }
}
