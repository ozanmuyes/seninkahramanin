@extends("layouts.site.default")

@section("title", trans("menu.about_us"))

@section("content")
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
