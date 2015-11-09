<?php
// dd($products);
    $total = 0;
?>

@extends("layouts.site.default")

@section("title", trans("menu.cart"))

@section("content")
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <section class="cart">
                <h1>Sepetiniz</h1>

                @if (Cart::getContent()->count() > 0)
                    <table class="table table-cart">
                        <col style="width:10%">
                        <col style="width:60%">
                        <col style="width:10%">
                        <col style="width:10%">
                        <col style="width:10%">

                        <thead>
                            <tr>
                                <th>Ürün No</th>
                                <th>Ürün</th>
                                <th>Cinsiyet</th>
                                {{-- <th>Tarih</th> --}}
                                <th>Adet</th>
                                <th>Fiyat</th>
                                {{-- <th>Durum</th> --}}
                                <th>Temizle</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <th scope="row">{{ $product["id"] }}</th>

                                    <td class="cart-info">
                                        <div class="img-cart-bow">
                                            {!! Html::image($product["attributes"]["image"]["path"], $product["attributes"]["image"]["alt"], ["class" => "img-full-size"]) !!}
                                        </div>

                                        <div class="text-cart-bow">
                                            <h1>{{ $product["name"] }}</h1>

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia saepe sit deserunt, recusandae odit ratione.</p>
                                        </div>
                                    </td>

                                    {{-- <td>17 Haziran 2015</td> --}}
                                    <td>{{ $product["attributes"]["sex"]["name"] }}</td>
                                    {{-- <td>{{ $product["attributes"]["sex"]["name"] }}</td> --}}
                                    <td>{{ $product["quantity"] }}</td>
                                    <?php $total += $product["price"]; ?>
                                    <td>{{ $product["price"]}} <i class="fa fa-try"></i></td>
                                    {{-- <td>{{ $product["price"] . " " . mb_strtoupper($product["attributes"]["currency"]) }}</td> --}}

                                    <td>
                                        {{-- <button type="button" class="btn btn-default btn-sm">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button> --}}
                                        {!! link_to_route("Site.Cart.Remove", "Sil", $product["id"], ["title" => "Ürünü sepetten kaldır"]) !!}
                                    </td>


                                    {{-- <td>Siparis</td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="total-page">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                {{-- Eğer indirim yoksa h4'ü gizle --}}
                                <h4>
                                    Toplam: <?php printf("%.02f %s", $total, '<i class="fa fa-try"></i>') ?>
                                </h4>
                            </div>
                        </div>

                        <div class="row">
                            {!! Html::link(route("Site.Cart.Checkout"), "Öde", ["class" => "btn btn-success btn-lg pull-right btn-checkout"]) !!}
                        </div>
                    </div>
                @else
                    <p>
                        Sepetiniz boş. Ürün tasarlamaya karar verirseniz
                        <a href="{{ route('Site.Design') }}">Tasarla</a>
                        sayfasına gidebilirsiniz.
                    </p>
                @endif
            </section>
        </div>
    </div>

@endsection

@section("styles")
    @parent

    {!! Html::style('css/site/cart.css') !!}
@endsection
