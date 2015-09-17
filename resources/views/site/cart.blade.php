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
                                    <td>{{ $product["attributes"]["sex"] }}</td>
                                    <td>{{ $product["quantity"] }}</td>
                                    <?php $total += $product["price"]; ?>
                                    <td>{{ $product["price"] . " " . mb_strtoupper($product["attributes"]["currency"]) }}</td>
                                    {{-- <td>Siparis</td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="total-page">
                        <div class="row">
                            <div class="col-md-5">
                                {!! Form::open(["class" => "form-inline"]) !!}
                                    <div class="form-group">
                                        <input type="text" placeholder="Kupon Kodu" class="form-control form-bow">
                                    </div>

                                    {!! Form::submit("Uygula", ["class" => "btn btn-success"]) !!}

                                    <p class="help-block">Varsa indirim kuponu kodunuzu girin.</p>
                                {!! Form::close() !!}
                            </div>

                            <div class="col-md-7 text-right">
                                {{-- Eğer indirim yoksa h4'ü gizle --}}
                                <h4>
                                    Toplam: <s><?php printf("%.02f %s", $total, mb_strtoupper($product["attributes"]["currency"])) ?></s>
                                </h4>

                                <h3>
                                    {{-- CampaignController'dan indirimi hesaplattır --}}
                                    İndirimli: <?php printf("%.02f %s", $total, mb_strtoupper($product["attributes"]["currency"])) ?>
                                </h3>
                            </div>
                        </div>

                        <div class="row">
                            <button type="button" class="btn btn-success btn-lg pull-right btn-checkout">Ödemeyi Tamamla</button>
                        </div>
                    </div>
                @else
                    <p>Sepetiniz boş. Ürün tasarlamaya karar verirseniz <a href="{{ route('Site.Design') }}">Tasarla</a> sayfasına gidebilirsiniz.</p>
                @endif
            </section>
        </div>
    </div>

    {{-- @include("partials.site.cart-table") --}}
@endsection

@section("styles")
    @parent

    {!! Html::style('css/site/cart.css') !!}
@endsection
