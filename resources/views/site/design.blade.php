@extends("layouts.site.default")

@section("title", trans("menu.design"))

@section("content")
    @include(
        "partials.site.owl",
        [
            "singleItem" => true,
            "navigation" => true,
            "navigationText" => [
                "<i class='icon-chevron-left icon-white'><</i>",
                "<i class='icon-chevron-right icon-white'>></i>"
            ],
            "isFirst" => true,
            "images" => [
                [
                    "path" => "foo.gif",
                    "alt" => "Foo"
                ],
                [
                    "path" => "bar.gif",
                    "alt" => "Bar"
                ],
                [
                    "path" => "baz.gif",
                    "alt" => "Baz"
                ]
            ]
        ]
    )

    @include(
        "partials.site.owl",
        [
            "items" => 2,
            "navigation" => true,
            "navigationText" => [
                "<i class='icon-chevron-left icon-white'><</i>",
                "<i class='icon-chevron-right icon-white'>></i>"
            ],
            "images" => [
                [
                    "path" => "baz.gif",
                    "alt" => "Baz"
                ],
                [
                    "path" => "qux.gif",
                    "alt" => "Qux"
                ],
                [
                    "path" => "baz.gif",
                    "alt" => "Baz"
                ]
            ]
        ]
    )

    {{-- Sex --}}
    <div class="row">
        <div class="col-md-12 banner">
            <h3 class="banner-name">Cinsiyetiniz</h3>
        </div>

        <div class="col-md-12">
            <div class="col-md-6" align="right">
                <img src="http://placehold.it/350x350">
            </div>

            <div class="col-md-6">
                <img src="http://placehold.it/350x350">
            </div>
        </div>
    </div>

    {{-- model --}}
    <div class="row">
        <div class="col-md-12 banner">
            <h3 class="banner-name">Model</h3>
        </div>

        <div class="col-md-12">
            <div class="col-md-3">
                <img src="http://placehold.it/250x250">
            </div>

            <div class="col-md-3">
                <img src="http://placehold.it/250x250">
            </div>

            <div class="col-md-3">
                <img src="http://placehold.it/250x250">
            </div>

            <div class="col-md-3">
                <img src="http://placehold.it/250x250">
            </div>
        </div>
    </div>

    {{-- speaking line --}}
    <div class="row">
        <div class="col-md-6 col-md-6-with-gap-left">
            <h3 class="banner-name">Dostunuzun konuşma balonu</h3>

            <div class="lefter">
                {{-- Carousel index --}}
                a
                <br><br>
                b
                <br><br><br>
                c
                <br><br><br><br>
                d
            </div>
        </div>

        {{-- message --}}
        <div class="col-md-6 col-md-6-with-gap-right">
            <h3 class="banner-name">Mesajınız</h3>

            <div class="righter">
                {{-- Carousel index --}}
                a
                <br><br>
                b
                <br><br><br>
                c
                <br><br><br><br>
                d
            </div>
        </div>
    </div>
@endsection

@section("styles")
    {!! Html::style('css/site/design.css') !!}
@endsection
