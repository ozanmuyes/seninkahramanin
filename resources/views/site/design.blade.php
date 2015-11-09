@extends("layouts.site.default")

@section("title", trans("menu.design"))

@section("content")
    <section id="section-sexes" class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Cinsiyet</h2>

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
                            "prefixImg" => true,
                            "image" => [
                                "path" => $sex->image->path,
                                "alt" => $sex->image->alt
                            ],
                            "_selectable" => !!$sex->_selectable,
                            "_selectable_type" => $sex->_selectable_type,
                            "_selectable_name" => $sex->_selectable_name
                        ]
                    )
                @endforeach
            </div>
        </div>
    </section>

    <section id="section-products" class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Ürünler</h2>

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

            <div id="products_carousel" class="owl-carousel" data-owl='{"items": 6, "itemsMobile": 2, "pagination": false}'>
                <?php $i = 0; ?>
                @foreach ($products as $product)
                    <?php #dd($product->images[0]); ?>
                    @include(
                        "partials.site.product",
                        [
                            "id" => $product->id,
                            "slug" => $product->slug,
                            "name" => $product->name,
                            "image" => [
                                "path" => $product->images[0]->path,
                                "alt" => $product->images[0]->alt
                            ],
                            "price" => $product->price->withoutCurrency,
                            "_selectable" => !!$product->_selectable,
                            "_selectable_type" => $product->_selectable_type,
                            "_selectable_name" => $product->_selectable_name
                        ]
                    )
                @endforeach
            </div>

            <br>
            <br>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="product-size">Beden</label>

                        <select id="product-size" class="form-control"></select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="input-group spinner">
                        <label for="product-count">Adet</label>

                        <input type="text" id="product-count" class="form-control" value="1">

                        <div class="input-group-btn-vertical">
                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-texts-and-colors" class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Yazılar ve Renkler</h2>
            <br>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="speech-baloon">Konuşma Balonu Yazısı</label>
                        <br>
                        <input type="checkbox" id="speech-baloon-enabled" aria-label="Is Speech Balloon Active">&nbsp;Konuşma Balonu İstiyorum
                        <input type="text" class="form-control" id="speech-baloon" disabled>
                        <span id="helpBlock" class="help-block">En fazla 25 karakter girebilirsiniz.</span>
                        {{-- <span id="helpBlock" class="help-block">En fazla 25 karakter girebilirsiniz. 0/25</span> --}}
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="pet-name">Evcil Hayvan İsmi</label>
                        <br>
                        <input type="checkbox" id="pet-name-enabled" aria-label="Is Speech Balloon Active">&nbsp;Evcil Hayvanımın İsmi Yazsın
                        <input type="text" class="form-control" id="pet-name" disabled>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="background-color">Arkaplan Rengi</label>
                        <br>
                        <br>
                        <button id="background-color" class="btn btn-default btn-block" type="button">&nbsp;</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-image-style" class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Tarz</h2>
            <br>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="style">Resmin Tarzını Seçin</label>
                        <br>
                        {{-- http://jsfiddle.net/KyleMit/0nevkwyn/ --}}
                        <div id="style-buttons" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default">
                                <input type="radio" value="kalem" /> Kalem
                                {!! Html::image("img/design/kalem_wide.jpg", "Kalem", ["class" => "img-responsive"]) !!}
                            </label>

                            <label class="btn btn-default">
                                <input type="radio" value="boya" /> Boya
                                {!! Html::image("img/design/boya_wide.jpg", "Kalem", ["class" => "img-responsive"]) !!}
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-image" class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Resim</h2>
            <br>

            <div class="row">
                <div class="col-md-8">
                    @include(
                        "partials.admin.cropper",
                        [
                            "label" => false,
                            "name" => "image",
                            "uploadButtonText" => "Resim Yükle",
                            "formSelector" => "form",
                            "autoCropArea" => 0.8
                        ]
                    )
                </div>
            </div>
        </div>
    </section>

    <section class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Siparişi Tamamlayın</h2>
            <br>
            <a id="btnOrder" class="btn btn-success btn-lg btnOrder" href="{{ route('Site.Design') }}" role="button">Sepete Ekle</a>
            <a id="btnOrderAndGo" class="btn btn-success btn-lg btnOrder" href="{{ route('Site.Design') }}" role="button">Sepete Ekle ve Git</a>
        </div>
    </section>
@endsection

@section("styles")
    @parent

    {!! Html::style("css/owl.carousel.css") !!}
    {!! Html::style("css/owl.theme.css") !!}
    {!! Html::style("css/colorpicker.css") !!}
@endsection

@section("scripts")
    @parent

    {!! Html::script("js/owl.carousel.min.js") !!}
    {!! Html::script("js/jquery.ddslick.min.js") !!}
    {!! Html::script("js/colorpicker.js") !!}

    <script>
        String.prototype.endsWith = function(suffix) {
            return this.indexOf(suffix, this.length - suffix.length) !== -1;
        };

        var order = {
            sex: {
                name: null
            },
            product: {
                name: null,
                size: null
            },
            speechBaloon: {
                enabled: false,
                text: null
            },
            petName: {
                enabled: false,
                text: null
            },
            backgroundColor: {
                hsb: {
                    h: 0,
                    s: 0,
                    b: 100,
                },
                hex: "FFFFFF",
                rgb: {
                    r: 255,
                    g: 255,
                    b: 255
                }
            },
            image: {
                style: null,
                data: null
            }
        };

        $(document).ready(function() {
            $(".owl-carousel").each(function (idx, elm) {
                window[elm.id] = $(elm).owlCarousel(JSON.parse(elm.getAttribute("data-owl")));
            });

            // Custom Navigation Events
            $(".owl-navigation .next").click(function() {
                $(window[$(this.parentElement).attr("for")]).trigger("owl.next");
            });

            $(".owl-navigation .prev").click(function() {
                $(window[$(this.parentElement).attr("for")]).trigger("owl.prev");
            });

            $("#product-size").val("Lütfen cinsiyet seçin");
            $("input:checkbox").removeAttr("checked");
            $("#speech-baloon").prop("disabled", "disabled").val("");
            $("#pet-name").prop("disabled", "disabled").val("");

            $(".owl-item>a.selectable").click(function () {
                $this = $(this);

                $(".owl-item>a.selectable[data-selectable-type='" + $this.data("selectableType") + "']").each(function (index, elm) {
                    $(elm).removeClass("selected");
                });
                $this.addClass("selected");

                if ($this.data("selectableType") == "sex") {
                    initProductSizes($this.data("selectableName") == "Kadın" ? femaleProductSizes : maleProductSizes);
                }

                order[$this.data("selectableType")]["name"] = $this.data("selectableName");
            });

            var femaleProductSizes = [
                {
                    text: "XS",
                    value: 1,
                    selected: false,
                    description: "Göğüs: 48<br>Boy: 67"
                },
                {
                    text: "S",
                    value: 2,
                    selected: false,
                    description: "Göğüs: 51<br>Boy: 68"
                },
                {
                    text: "M",
                    value: 3,
                    selected: true,
                    description: "Göğüs: 53<br>Boy: 70"
                },
                {
                    text: "L",
                    value: 4,
                    selected: false,
                    description: "Göğüs: 55<br>Boy: 73"
                }
            ];
            var maleProductSizes = [
                {
                    text: "S",
                    value: 2,
                    selected: false,
                    description: "Göğüs: 51<br>Boy: 68"
                },
                {
                    text: "M",
                    value: 3,
                    selected: true,
                    description: "Göğüs: 53<br>Boy: 70"
                },
                {
                    text: "L",
                    value: 4,
                    selected: false,
                    description: "Göğüs: 55<br>Boy: 73"
                },
                {
                    text: "XL",
                    value: 5,
                    selected: false,
                    description: "Göğüs: 57<br>Boy: 75"
                },
                {
                    text: "XXL",
                    value: 5,
                    selected: false,
                    description: "Göğüs: 59<br>Boy: 77"
                }
            ];
            var initProductSizes = function (sizes) {
                $("#product-size").ddslick("destroy");

                var $productSize = $("#product-size").ddslick({
                    data: sizes,
                    // width: 400,
                    onSelected: function (selected) {
                        order.product.size = selected.selectedData.value;
                    }
                });
            }

            $("#speech-baloon-enabled").click(function () {
                $("#speech-baloon").prop("disabled", !this.checked);

                order.speechBaloon.enabled = !order.speechBaloon.enabled;
            });

            $("#speech-baloon").bind("change paste keyup", function (e) {
                order.speechBaloon.text = $(this).val();
            });

            $("#pet-name-enabled").click(function () {
                $("#pet-name").prop("disabled", !this.checked);

                order.petName.enabled = !order.petName.enabled;
            });

            $("#pet-name").bind("change paste keyup", function (e) {
                order.petName.text = $(this).val();
            });

            var backgroundColorButton = $("#background-color");
            backgroundColorButton.ColorPicker({
                onChange: function (hsb, hex, rgb, el) {
                    backgroundColorButton.css("background-color", "#" + hex);

                    order.backgroundColor.hsb = hsb;
                    order.backgroundColor.hex = hex;
                    order.backgroundColor.rgb = rgb;
                }
            });

            $(".btnOrder").click(function () {
                var goToCart = $(this).attr("id").endsWith("Go");

                if (order.sex.name === null) {
                    alert("Lütfen cinsiyet seçimi yapın.");

                    $(window).scrollTop($("#section-sexes").position().top);

                    return false;
                }

                if (order.product.name === null) {
                    alert("Lütfen ürün seçimi yapın.");

                    $(window).scrollTop($("#section-products").position().top);

                    return false;
                }

                var $activeStyleButton = $("#style-buttons>label.active");
                if ($activeStyleButton.length == 1) {
                    order.image.style = $activeStyleButton.children("input").val()
                } else {
                    alert("Lütfen resim tarzı seçimini yapın.");

                    $(window).scrollTop($("#section-image-style").position().top);

                    return false;
                }

                order.image.data = getImageDataURL();

                $.ajax({
                    type: "POST",
                    url: "/sepet/ekle",
                    data: JSON.stringify(order),
                    dataType: "json",
                    contentType: "application/json",
                    complete: function (data, status, xhr) {
// console.log(data);
                        window.location = (goToCart ? "/sepet" : "/");

                    },
                    beforeSend: function (xhr) {
                        xhr.setRequestHeader("X-CSRF-TOKEN", $("meta[name='token']").attr("content"));
                    }
                });

                return false;
            });
        });
    </script>
@endsection
