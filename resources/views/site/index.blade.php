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

                                <p>Petinizin yeni veya mevcut fotoğrafını <a href="{{ route('Site.Guide') }}">FOTOĞRAF SEÇME REHBERİNDEKİ</a> kriterleri de inceleyerek oluştur.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="row margin-bottom-md">
                    <div class="media shadow">
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="media-body">
                                <h3>Tercihlerini Yap</h3>

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

                                <p>Üstünde petin fotoğrafı olan t-shirt'ünü keyifle giy.</p>
                            </div>
                        </div>
                    </div>
                </article>
            </section>

            <section>
                <a href="//www.facebook.com/seninkahramanin">{!! Html::image("img/ikonlar/facebook_sm.jpg", "Facebook İkonu") !!} Facebook</a> ve
                <a href="//www.instagram.com/seninkahramanin">{!! Html::image("img/ikonlar/instagram_sm.jpg", "Instagram İkonu") !!} İnstragram</a> sayfalarımızı takip ederek,ürününüz ve petinizle beraber çekildiğiniz fotoğrafınızı bizimle paylaşmayı unutmayın.
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

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <div class="col-md-12 about-giris">
                    <div class="col-md-4">
                        <img src="img/Sadri_Alisik.jpg">
                    </div>

                    <div class="col-md-8">
                        <p class="about-motto">
                            "Sokak köpeklerine selam vermek<br>adam olmaya çeyrek var demektir."
                        </p>

                        <p class="right">
                            - Sadri Alışık
                        </p>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <h3 class="about-motto">Biz Kimiz?</h3>

                        <br>
                        <br>

                        <p>
                            Senin Kahramanın, içinde hayvan sevgisi taşıyan her bireyin, bu sevgiyi bir
                            simgeye dönüştürüp aynı zamanda üzerlerinde gururla taşıyabilmelerini sağlamak
                            amacıyla, 2 girişimci hayvansever tarafından kurulmuş  bir platformdur.
                        </p>
                    </div>

                    <div class="col-md-4">
                        <h3 class="about-motto">Ne Yapıyoruz?</h3>

                        <br>
                        <br>

                        <p>
                            Kahramanınızın fotoğrafını alıyoruz, tamamen size özel tasarlayıp, tercih
                            ettiğiniz ürününüze basıp,size ulaştırıyoruz
                        </p>
                    </div>

                    <div class="col-md-4">
                        <h3 class="about-motto">Misyonumuz?</h3>

                        <br>
                        <br>

                        <p>
                            İçinde hayvan sevgisi taşıyan her bireyin, onlara karşılıksız bir sevgi ve
                            sadakat ile bağlı olan kahramanlar ile gururlanmalarını sağlamak. Bu saf sevginin
                            henüz farkında olmayanların ise bir gün farkına varmalarına aracı olabilmek.
                        </p>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row about-form">
                <div class="col-md-12">
                    <form role="form" action="" method="post" >
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-group">
                                <label for="InputName">İsminiz</label>

                                <div class="input-group">
                                    <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Örnek isim" required>
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="InputEmail">Email Adresiniz</label>

                                <div class="input-group">
                                    <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="örnek@gmail.com" required  >
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="InputMessage">Mesajınız</label>

                                <div class="input-group">
                                    <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                                </div>
                            </div>

                            <input type="submit" name="submit" id="submit" value="Mesajını Gönder" class="btn btn-success btn-block">
                        </div>
                    </form>

                    <hr class="featurette-divider hidden-lg">
                </div>
            </div>
        </div>
    </div>
@endsection
