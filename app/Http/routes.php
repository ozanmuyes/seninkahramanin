<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get("foo", "Site\SiteController@foo");

Route::get("group/test-band/repertoire", function () {
    return view("dd")->with("var", json_encode(Cart::getContent()));
});
Route::get("cart/clear", function () {
    Cart::clear();

    return redirect("/");
});

Route::group(
    [
        "prefix" => "kayit"
    ],
    function () {
        Route::get("/", ["as" => "Register", "uses" => "Auth\AuthController@getRegister"]);
        Route::post("/", "Auth\AuthController@postRegister");

        Route::group(
            [
                "prefix" => "{provider}"
            ],
            function () {
                Route::get("/", ["as" => "Register.Provider", "uses" => "Auth\AuthController@getSocialAuth"]);
                Route::get("callback", ["uses" => "Auth\AuthController@getSocialAuthCallback"]);
            }
        );
    }
);

Route::group(
    [
        "prefix" => "giris"
    ],
    function () {
        Route::get("/", ["as" => "Login", "uses" => "Auth\AuthController@getLogin"]);
        Route::post("/", ["uses" => "Auth\AuthController@postLogin"]);

        Route::group(
            [
                "prefix" => "{provider}"
            ],
            function () {
                Route::get("/", ["as" => "Login.Provider", "uses" => "Auth\AuthController@getSocialAuth"]);
                Route::get("callback", ["uses" => "Auth\AuthController@getSocialAuthCallback"]);
            }
        );
    }
);

Route::post("cikis", ["as" => "Logout", "uses" => "Auth\AuthController@getLogout"]);

Route::group(
    [
        "as" => "Site.",
        "namespace" => "Site"
    ],
    function () {
        Route::get("/", ["as" => "Index", "uses" => "SiteController@index"]);

        Route::get("rehber", ["as" => "Guide", "uses" => "SiteController@guide"]);

        Route::get("tasarla", ["as" => "Design", "uses" => "SiteController@design"]);

        Route::get("hakkimizda", ["as" => "AboutUs", "uses" => "SiteController@aboutUs"]);

        Route::group(
            [
                "prefix" => "sepet",
                "as" => "Cart."
            ],
            function () {
                Route::get("/", ["as" => "Index", "uses" => "CartController@index"]);

                Route::post("ekle", ["uses" => "CartController@store"]);

                Route::group(
                    [
                        "prefix" => "add",
                        "as" => "Add."
                    ],
                    function () {
                        Route::get("{id}", ["as" => "One", "uses" => "CartController@add"]);

                        Route::get("{id}/{qty}", ["as" => "Multiple", "uses" => "CartController@add"])
                            ->where(["qty" => "[0-9]+"]);
                    }
                );

                Route::get("sil/{id}", ["as" => "Remove", "uses" => "CartController@remove"]);
                Route::get("clear", ["as" => "Clear", "uses" => "CartController@clear"]);

                Route::get("ode", ["as" => "Checkout", "uses" => "CartController@getCheckout"]);
                Route::post("ode", ["uses" => "CartController@postCheckout"]);
            }
        );

        Route::group(
            [
                "prefix" => "kullanicilar",
                "as" => "Users."
            ],
            function () {
                // Route::get("/", ["as" => "Index", "uses" => "UsersController@index"]);

                Route::get("{username}", ["as" => "Show", "uses" => "UsersController@show"]);
            }
        );

        Route::get("profilim", ["as" => "Profile", "uses" => "UsersController@show"]);
    }
);

Route::group(
    [
        "prefix" => "yonetim-paneli",
        "as" => "Admin.",
        "namespace" => "Admin",
        "middleware" => [
            "auth",
            "admin",
            "no-cache"
        ]
    ],
    function () {
        Route::get("/", ["as" => "Index", "uses" => "AdminController@index"]);

        Route::group(
            [
                "prefix" => "kullanicilar",
                "as" => "Users."
            ],
            function () {
                Route::get("/", ["as" => "Index", "uses" => "UsersController@index"]);

                Route::get("ekle", ["as" => "Create", "uses" => "UsersController@create"]);
                Route::post("ekle", "UsersController@store");

                Route::group(
                    [
                        "prefix" => "gruplar",
                        "as" => "Groups."
                    ],
                    function () {
                        Route::get("/", ["as" => "Index", "uses" => "GroupsController@index"]);

                        Route::get("ekle", ["as" => "Create", "uses" => "GroupsController@create"]);
                    }
                );

                Route::group(
                    [
                        "prefix" => "yetkiler",
                        "as" => "Roles."
                    ],
                    function () {
                        Route::get("/", ["as" => "Index", "uses" => "RolesController@index"]);

                        Route::get("duzenle", ["as" => "Edit", "uses" => "RolesController@edit"]);
                    }
                );

                Route::get("{slug}", ["as" => "Show", "uses" => "UsersController@show"]);

                Route::get("{slug}/duzenle", ["as" => "Edit", "uses" => "UsersController@edit"]);
                Route::post("{slug}/duzenle", ["uses" => "UsersController@update"]);

                Route::get("{slug}/sil", ["as" => "Delete", "uses" => "UsersController@destroy"]);
            }
        );

        Route::group(
            [
                "prefix" => "fotograflar",
                "as" => "Images."
            ],
            function () {
                Route::get("/", ["as" => "Index", "uses" => "ImagesController@index"]);

                Route::get("yukle", ["as" => "Create", "uses" => "ImagesController@create"]);

                Route::group(
                    [
                        "prefix" => "slaytlar",
                        "as" => "Slides."
                    ],
                    function () {
                        Route::get("/", ["as" => "Index", "uses" => "SlidesController@index"]);

                        Route::get("ekle", ["as" => "Create", "uses" => "SlidesController@create"]);
                        Route::post("ekle", ["uses" => "SlidesController@store"]);

                        Route::get("{slug}", ["as" => "Show", "uses" => "SlidesController@show"]);
                    }
                );
            }
        );

        Route::group(
            [
                "prefix" => "urunler",
                "as" => "Products."
            ],
            function () {
                Route::get("/", ["as" => "Index", "uses" => "ProductsController@index"]);
            }
        );

        Route::group(
            [
                "prefix" => "siparisler",
                "as" => "Orders."
            ],
            function () {
                Route::get("/", ["as" => "Index", "uses" => "OrdersController@index"]);
            }
        );
    }
);

Route::group(
    [
        "prefix" => "api",
        "namespace" => "Admin"
    ],
    function () {
        Route::group(
            [
                "prefix" => "users"
            ],
            function () {
                Route::get("is-email-unique", "UsersController@isEmailUnique");
            }
        );
    }
);
