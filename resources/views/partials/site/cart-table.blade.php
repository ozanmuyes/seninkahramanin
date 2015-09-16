{{-- Products --}}
<div class="container product-div">
    <table class="table table-bow mar-btm-0">
        <thead>
            <tr>
                <th class="th-green">
                    Ürün No
                </th>
                <th class="th-green">
                    Ürün
                </th>
                <th class="th-green">
                    Tarih
                </th>
                <th class="th-green">
                    Adet
                </th>
                <th class="th-green">
                    Ücret
                </th class="th-green">
                <th class="th-green">
                    Durum
                </th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">
                    1
                </th>
                <td class="cart-info">
                    <div class="img-cart-bow">
                        <img src="img/product1.jpg" class="img-full-size" alt="bow-cart">
                    </div>
                    <div class="text-cart-bow">
                        Ürün 1
                        <h1>
                            T-shirt
                        </h1>
                        <p>
                            First Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.
                        </p>
                    </div>
                </td>
                <td>
                    17 Haziran 2015
                </td>
                <td>
                    2
                </td>
                <td>
                    60.00 TL
                </td>
                <td>
                    Siparis
                </td>
            </tr>

            <tr>
                <th scope="row">
                    2
                </th>
                <td class="cart-info">
                    <div class="img-cart-bow">
                        <img src="img/product2.jpg" class="img-full-size" alt="bow-cart">
                    </div>
                    <div class="text-cart-bow">
                        Ürün 2
                        <h1>
                            Uzun Kollu
                        </h1>
                        <p>
                            Second Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.
                        </p>
                    </div>
                </td>
                <td>
                    17 Haziran 2015
                </td>
                <td>
                    3
                </td>
                <td>
                    70.00TL
                </td>
                <td>
                    Siparis
                </td>
            </tr>

        </tbody>
    </table>

    <div class="total-page">
        <div class="row">
            <div class="col-sm-3 no-pad-right">
                <div class="form-group mar-top-10 mar-btm-10">
                    <input type="email" placeholder="Kupon no" class="form-control form-bow">
                </div>
            </div>

            <div class="col-sm-3">
                <button type="submit" class="btn-bow btn-green-square mar-top-10">Kupon</button>
            </div>

            <div class="col-sm-6">
                <div class="total-price-bow">
                    <h4 class="text-right">
                        Ara Toplam : 60.00TL
                    </h4>
                    <h1 class="text-right normal-heading">
                        Toplam : 130TL
                    </h1>
                </div>
            </div>
        </div>
        * Indirim kuponunuzu buraya ekleyebilirsiniz
    </div>

</div>

@section("styles")
    @parent

    {!! Html::style('css/partials/site/cart-table.css') !!}
@endsection