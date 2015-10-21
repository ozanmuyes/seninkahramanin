@extends("layouts.site.default")

@section("title", trans("menu.index"))

@section("content")
    <div class="row">
        <div class="col-md-12 no-padding-lr">
            @include("partials.site.slider")
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
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

            <section>
                <article class="row margin-bottom-md">
                    <div class="media shadow">
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
                </article>

                <article class="row margin-bottom-md">
                    <div class="media shadow">
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
                </article>

                <article class="row margin-bottom-md">
                    <div class="media shadow">
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
                </article>
            </section>

            <section>
                <h1 class="text-center">Sipariş Verin</h1>

                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <a class="btn btn-success btn-lg btn-block" href="{{ route('Site.Design') }}" role="button">Şimdi Tasarla!</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
