@extends("layouts.site.default")

@section("title", trans("menu.design"))

@section("content")
    <section class="row">
        <h4>Cinsiyet</h4>

        <div class="col-md-8 col-md-offset-2">
            <div class="clearfix">
                <div class="owl-navigation pull-right" for="sexes_carousel">
                    <a class="btn btn-default prev">
                        <i class='fa fa-fw fa-chevron-left'></i>
                    </a>

                    <a class="btn btn-default next">
                        <i class='fa fa-fw fa-chevron-right'></i>
                    </a>
                </div>
            </div>

            <div id="sexes_carousel" class="owl-carousel" data-owl='{"items": 2, "pagination": false}'>
                @foreach ($sexes as $sex)
                    @include(
                        "partials.site.product",
                        [
                            "name" => $sex->name,
                            "image" => [
                                "path" => $sex->image->path,
                                "alt" => $sex->image->alt
                            ],
                            "href" => @$sex->href,
                            "onClick" => $sex->onClick
                        ]
                    )
                @endforeach
            </div>
        </div>
    </section>

    <section class="row">
        <h4>Ürünler</h4>

        <div class="col-md-8 col-md-offset-2">
            <div class="clearfix">
                <div class="owl-navigation pull-right" for="products_carousel">
                    <a class="btn btn-default prev">
                        <i class='fa fa-fw fa-chevron-left'></i>
                    </a>

                    <a class="btn btn-default next">
                        <i class='fa fa-fw fa-chevron-right'></i>
                    </a>
                </div>
            </div>

            <div id="products_carousel" class="owl-carousel" data-owl='{"items": 4, "pagination": false}'>
                @foreach ($products as $product)
                    @include(
                        "partials.site.product",
                        [
                            "id" => $product->id,
                            "slug" => $product->slug,
                            "name" => $product->name,
                            "image" => [
                                "path" => "product1.png",
                                "alt" => "product1 Image"
                            ],
                            "buttons" => [
                                [
                                    "icon" => "fa fa-shopping-cart",
                                    "href" => "/urunler/\slug",
                                    "text" => "Sepete Ekle"
                                ],
                                [
                                    "icon" => "fa fa-list",
                                    "href" => "#",
                                    "text" => "İncele"
                                ]
                            ]
                        ]
                    )
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section("styles")
    @parent

    {!! Html::style("css/owl.carousel.css") !!}
    {!! Html::style("css/owl.theme.css") !!}
@endsection

@section("scripts")
    @parent

    {!! Html::script("js/owl.carousel.min.js") !!}

    <script>
        $(document).ready(function() {
            $(".owl-carousel").each(function (idx, elm) {
                window[elm.id] = $(elm).owlCarousel(JSON.parse(elm.getAttribute("data-owl")));
            });

            // var sexes_carousel = $("#sexes_carousel"),
            //     products_carousel = $("#products_carousel");

            // sexes_carousel.owlCarousel({
            //     items: 4
            // });

            // products_carousel.owlCarousel({
            //     items: 4
            // });

            // Custom Navigation Events
            $(".owl-navigation .next").click(function() {
                $(window[$(this.parentElement).attr("for")]).trigger("owl.next");
            });

            $(".owl-navigation .prev").click(function() {
                $(window[$(this.parentElement).attr("for")]).trigger("owl.prev");
            });
        });

        function selectSex() {
            console.log();
        }
    </script>
@endsection
