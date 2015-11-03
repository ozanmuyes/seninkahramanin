<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;

use Cart;
use Auth;
use Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view("site.cart")->with("products", Cart::getContent());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $inputs = $request->input();
        $product = Product::where("name", $inputs["product"]["name"])->first();
        $price = $product->price;

        $inputs["product"]["id"] = $product->id;
        $inputs["image"]["path"] = $product->images[0]->path;
        $inputs["image"]["alt"] = $product->images[0]->alt;
        $inputs["currency"] = $price->currency;

        Cart::add(
            $product->id,
            $product->name,
            $price->withoutCurrency,
            1,
            $inputs
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Add product to cart
     *
     * @param integer $id Product ID
     * @param integer $quantity Quantity of the product
     * @return Response
     */
    public function add($id, $quantity = 1)
    {
        // Refer to SiteController@guide
    }

    /**
     * Remove one item from cart
     *
     * @param  Item ID $id
     * @return Response
     */
    public function remove($id)
    {
        Cart::remove($id);

        return redirect()->route("Site.Cart.Index");
    }

    /**
     * Clear cart
     *
     * @return Response
     */
    public function clear()
    {
        Cart::clear();

        return redirect()->route("Site.Cart.Index");
    }

    public function getCheckout()
    {
        if (Auth::check()) {
            return view("site.checkout");
        } else {
            Session::put("intended", "Site.Cart.Checkout");

            return redirect()->route("Login");
        }
    }

    public function postCheckout(Request $request)
    {
dd($request);
    }
}
