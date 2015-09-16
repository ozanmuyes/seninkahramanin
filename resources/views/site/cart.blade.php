@extends("layouts.site.default")

@section("title", trans("menu.cart"))

@section("content")
    {{-- your shopping cart --}}
    <section class="product-cart">
      <div class="container">
        <div class="nav-product-cart">
          <div class="row">
            <div class="col-sm-6">
              <div class="icon-chart">
                <img src="img/cart-icon.jpg" alt="cart-icon">
              </div>
              <h3>
                Alısveris Sepetiniz
              </h3>
            </div>
            <div class="col-sm-6">
              <a href="woman-collection.html" class="pull-right next-shop">Alısverise devam et &gt;</a>
            </div>
          </div>
         </div>
       </div>
      </section>

      @include("partials.site.cart-table")

    <div class="col-sm-4 col-sm-offset-8 odeme-buton">
        <button type="button" class="btn btn-success btn-md odeme-tamamla">Ödemeyi Tamamla</button>
        <br>
    </div>
@endsection

@section("styles")
    @parent

    {!! Html::style('css/site/cart.css') !!}
@endsection
