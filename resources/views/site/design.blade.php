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
                    @include(
                        "partials.site.product",
                        [
                            "id" => $product->id,
                            "slug" => $product->slug,
                            "name" => $product->name,
                            "image" => [
                                "path" => "model" . $i++ % 6 . ".jpg",
                                "alt" => "product1 Image"
                            ],
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
                                {!! Html::image("img/design/kalem.jpg", "Kalem", ["class" => "img-responsive"]) !!}
                            </label>

                            <label class="btn btn-default">
                                <input type="radio" value="boya" /> Boya
                                {!! Html::image("img/design/boya.jpg", "Kalem", ["class" => "img-responsive"]) !!}
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
            <a id="btnOrder" class="btn btn-success btn-lg" href="{{ route('Site.Design') }}" role="button">Sepete Ekle</a>
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

            $("#product-size").val("M");
            $("input:checkbox").removeAttr("checked");
            $("#speech-baloon").prop("disabled", "disabled").val("");
            $("#pet-name").prop("disabled", "disabled").val("");

            $(".owl-item>a.selectable").click(function () {
                $this = $(this);

                $(".owl-item>a.selectable[data-selectable-type='" + $this.data("selectableType") + "']").each(function (index, elm) {
                    $(elm).removeClass("selected");
                });
                $this.addClass("selected");

                order[$this.data("selectableType")]["name"] = $this.data("selectableName");
            });

            var productSizes = [
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
                },
                {
                    text: "XL",
                    value: 5,
                    selected: false,
                    description: "Göğüs: 57<br>Boy: 75"
                }
            ];
            var $productSize = $("#product-size").ddslick({
                data: productSizes,
                // width: 400,
                onSelected: function (selected) {
                    order.product.size = selected.selectedData.value;
                }
            });

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

            $("#btnOrder").click(function () {
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
                        window.location = "/";
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
