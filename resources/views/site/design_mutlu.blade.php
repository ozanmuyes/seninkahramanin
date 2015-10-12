@extends("layouts.site.default")

@section("title", trans("menu.design"))

@section("content")
    {{-- Sex --}}
<div class="container">
    <div class="choice">
        <h2><span>CİNSİYETİNİZ</span></h2>
    </div>

    <div class="row form-group product-chooser">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="product-chooser-item sex selected">
                <img src="http://www.mrsid.com/tl_files/home/pic1.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12">

                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                    <span class="title">Erkek</span>
                    <input type="radio" name="product" value="mobile_desktop" checked="checked">
                </div>

                <div class="clear"></div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="product-chooser-item sex">

                <img src="http://magnolias.m.a.pic.centerblog.net/197ad5c1.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12">
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                    <span class="title">Bayan</span>
                    <input type="radio" name="product" value="desktop">
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>




    {{-- model --}}
    <div class="choice">
        <h2><span>MODELİNİZ</span></h2>
    </div>


    <div class="row form-group product-chooser">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="product-chooser-item selected">

                <img src="http://placehold.it/350x350" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12">
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                    <span class="title">Ürün 1</span>
                    <input type="radio" name="product" value="mobile_desktop" checked="checked">
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="product-chooser-item">

                <img src="http://placehold.it/350x350" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12">
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                    <span class="title">Ürün 2</span>
                    <input type="radio" name="product" value="mobile_desktop" checked="checked">
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="product-chooser-item">

                <img src="http://placehold.it/350x350" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12">
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                    <span class="title">Ürün 3</span>
                    <input type="radio" name="product" value="mobile_desktop" checked="checked">
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="product-chooser-item">

                <img src="http://placehold.it/350x350" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12">
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                    <span class="title">Ürün 4</span>
                    <input type="radio" name="product" value="mobile_desktop" checked="checked">
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>


    {{-- Renk --}}
    <div class="choice">
        <h2><span>ARKA PLAN RENGİ</span></h2>
    </div>


    <div class="row form-group product-chooser">

        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <div class="product-chooser-item color-red selected">

                <div class="clear"></div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <div class="product-chooser-item color-blue">

                <div class="clear"></div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <div class="product-chooser-item color-purple">

                <div class="clear"></div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <div class="product-chooser-item color-black">

                <div class="clear"></div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                <div class="product-chooser-item color-green">

                <div class="clear"></div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <div class="product-chooser-item color-brown">


                <div class="clear"></div>
            </div>
        </div>

    </div>


    {{-- Speech Baloon --}}
    <div class="choice">
        <h2><span>KONUŞMA BALONCUĞU</span></h2>
    </div>


    <div class="row form-group product-chooser">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="product-chooser-item selected">

                <img src="http://placehold.it/350x350" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12">
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                    <span class="title">Konuşma Balonu 1</span>
                    <input type="radio" name="product" value="mobile_desktop" checked="checked">
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="product-chooser-item">

                <img src="http://placehold.it/350x350" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12">
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                    <span class="title">Konuşma Balonu 2</span>
                    <input type="radio" name="product" value="mobile_desktop" checked="checked">
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="product-chooser-item">

                <img src="http://placehold.it/350x350" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12">
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                    <span class="title">Konuşma Balonu 3</span>
                    <input type="radio" name="product" value="mobile_desktop" checked="checked">
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="product-chooser-item">

                <img src="http://images.sodahead.com/polls/001294987/600px_No_sign2svg_answer_3_xlarge.png" class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12">
                <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                    <span class="title">Konuşma Balonu İstemiyorum</span>
                    <input type="radio" name="product" value="mobile_desktop" checked="checked">
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    {{-- Size --}}
    <div class="choice">
        <h2><span>BEDENİNİZ</span></h2>
    </div>


    <div class="row form-group product-chooser">

        <div class="col-xs-12 col-sm-12 col-md-2 col-md-offset-1 col-lg-2 col-lg-offset-1">
            <div class="product-chooser-item selected">
                    <h1 align="center">XS</h1>
                <div class="clear"></div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <div class="product-chooser-item">
                    <h1 align="center">S</h1>
                <div class="clear"></div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <div class="product-chooser-item">
                    <h1 align="center">M</h1>
                <div class="clear"></div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <div class="product-chooser-item">
                    <h1 align="center">L</h1>
                <div class="clear"></div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <div class="product-chooser-item">
                    <h1 align="center">XL</h1>
                <div class="clear"></div>
            </div>
        </div>


    </div>

    <div class="col-sm-4 col-sm-offset-4 design-end">
        <a class="btn btn-success btn-lg btn-block"role="button">Tasarımı Tamamla</a>
    </div>



</div>


@endsection

@section("styles")
    {!! Html::style('css/site/design.css') !!}
@endsection

@section("scripts")
    {!! Html::script('js/partials/site/selector.js') !!}
@endsection
