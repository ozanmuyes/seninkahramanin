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
        //
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
     * Clear cart
     *
     * @return Response
     */
    public function clear()
    {
        Cart::clear();

        return redirect()->route("Cart.Index");
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
