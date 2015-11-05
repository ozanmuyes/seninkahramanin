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
                    Giyilebilir can dostunuz
                </p>

                <p>Senin kahramanın, en iyi dostlarımıza, kahramanlarımıza bir teşekkür mottosu ile yola çıkmış bir platformdur.</p>

                <p>Bugüne kadar karşılıksız sevgi ve sadakatlarıyla hep onlar bizleri mutlu etti.Neden biz de onlar için birşey yapmayalım?</p>
            </section>

            <section>
                <article class="row margin-bottom-md">
                    <h2>Nasıl Mı?</h2>

                    <div class="media shadow">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="media-left">
                                <img class="media-object" src="img/story1-sm.png">
                            </div>
                        </div>

                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="media-body">
                                <h3>Fotoğrafını Çek</h3>

                                <p>Evcil hayvanınızın yeni veya mevcut fotoğrafını FOTOĞRAF SEÇME REHBERİNDEKİ kriterleri de inceleyerek oluştur.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="row margin-bottom-md">
                    <div class="media shadow">
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="media-body">
                                <h3>Tasarımını Yap</h3>

                                <p>Tasarla sayfasında sırasıyla; cinsiyet, ürün, beden, konuşma balonu (tercihe bağlı), petinizin ismi (tercihe bağlı) kısımlarından tercihlerinizi yapıp, son olarakta ürünün arkaplan rengini belirle.</p>
                            </div>
                        </div>

                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="media-right">
                                <img class="media-object" src="img/story2-sm.png">
                            </div>
                        </div>
                    </div>
                </article>

                <article class="row margin-bottom-md">
                    <div class="media shadow">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="media-left">
                                <img class="media-object" src="img/story3-sm.png">
                            </div>
                        </div>

                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="media-body">
                                <h3>Giymeye Başla</h3>

                                <p>Üstünde evcil hayvanının fotoğrafı olan t-shirt'ünü keyifle giy.</p>
                            </div>
                        </div>
                    </div>
                </article>
            </section>

            <section>
                Facebook ve İnstragram sayfalarımızı takip ederek,ürününüz ve petinizle beraber çekildiğiniz fotoğrafınızı bizimle paylaşmayı unutmayın.
            </section>

            <section>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <a class="btn btn-success btn-lg btn-block" href="{{ route('Site.Design') }}" role="button">Şimdi Tasarla!</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
