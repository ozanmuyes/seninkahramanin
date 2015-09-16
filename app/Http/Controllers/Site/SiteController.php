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
        return view("site.design");
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

        $productId = mt_rand(1, 12);
        $quantity = mt_rand(1, 7);

        $product = App\Product::with("prices")->where(["id" => $productId])->first();
        $productArr = $product->toArray();
        $productArr["price"] = $product->price->withoutCurrency;
        $productArr["quantity"] = $quantity;
        unset($productArr["prices"]);

        Cart::add($productArr);

        Flash::success("Product '" . $productArr["name"] . "' added to cart.");

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
