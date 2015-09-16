@extends("layouts.site.default")

@section("title", trans("menu.index"))

@section("content")
    {{-- Slider --}}
    <div class="row">
        <div class="col-md-12 no-padding-lr">
            @include("partials.site.slider")
        </div>
    </div>
    {{-- /Slider --}}

    {{-- outer border --}}
    <div class="row">
        {{-- outer border column --}}
        <div class="col-md-offset-2 col-md-8">
            {{-- Title & Explanation (For divide slider and story line) --}}
            <section>
                <h1 class="text-center">Senin Kahramanın</h1>

                <p class="lead" align="center">
                    Şirket mottosu ya da benzeri bir slogan vs gelebilecek alan. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi dicta hic eaque quo debitis quibusdam iure.
                </p>

                <p>
                    Bu alana istenilen açıklama - bilgi - yazı eklenilecektir. Bunun öncelikli amacı hem metin olarak açıklama
                    yapıp sitenin amacını anlatmak hem de yukarıdaki slider ile aşağıda olacak olan story line arasında bir kısım
                    yaratp karmaşayı engellemek ve düzgün görünüm sağlamaktır.
                </p>
            </section>
            {{-- /Title & Explanation --}}

            {{-- Story Line --}}
            <section>
                <div class="media">
                    <div class="row shadow">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="media-left">
                                <img class="media-object" src="img/story1.png" height="300" width="350">
                            </div>
                        </div>

                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="media-body">
                                <h4>başlık 1</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam dolore reprehenderit earum culpa? Odit, asperiores, quas. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam dolore reprehenderit earum culpa? Odit, asperiores, quas. Ullam dolore reprehenderit earum culpa? Odit, asperiores, quas. Ullam dolore reprehenderit earum culpa? Odit, asperiores, quas. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, asperiores, quas. Lorem ipsum dolor sit amet, consectetur adipisicing elit. sit amet, consectetur adipisicing elit. Ullam dolore reprehenderit earum</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="media">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="media-body">
                                <h4>başlık 2</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aliquid facere, quam ligendi expedita repudiandae libero animi sequi blanditiis perferenouter! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam dolore reprehenderit earum culpa? Odit, asperiores, quas. Ullam dolore reprehenderit earum culpa? Odit, asperiores, quas. Ullam dolore reprehenderit earum culpa? Odit, asperiores, quas. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, asperiores, quas. Lorem ipsum dolor sit amet, consectetur adipisicing elit. sit amet, consectetur adipisicing elit. Ullam dolore reprehenderit earum</p>
                            </div>
                        </div>

                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="media-right">
                                <img class="media-object" src="img/story2.png" height="300" width="350">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="media">
                    <div class="row shadow">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="media-left">
                                <img class="media-object" src="img/story3.png" height="300" width="350">
                            </div>
                        </div>

                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="media-body">
                                <h4>başlık 3</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam dolore reprehenderit earum culpa? Odit, asperiores, quas. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam dolore reprehenderit earum culpa? Odit, asperiores, quas. Ullam dolore reprehenderit earum culpa? Odit, asperiores, quas. Ullam dolore reprehenderit earum culpa? Odit, asperiores, quas. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, asperiores, quas. Lorem ipsum dolor sit amet, consectetur adipisicing elit. sit amet, consectetur adipisicing elit. Ullam dolore reprehenderit earum</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Call To action button --}}
                <div class="col-sm-4 col-sm-offset-4">
                    <a class="btn btn-success btn-lg btn-block" href="{{ route('Site.Design') }}" role="button">Şimdi Tasarla!</a>
                </div>
                {{-- /Call To action button --}}
            </section>
            {{-- /Story Line --}}
        </div>{{-- /outer border column --}}
    </div>{{-- /outer border --}}
@endsection
