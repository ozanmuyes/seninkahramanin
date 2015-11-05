@extends("layouts.site.default")

@section("title", "Rehber")

@section("content")
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Fotoğraf Seçme Rehberi</h1>

            <div class="row">
                <div class="col-md-12 comparison-box">
                    <div class="col-md-4">
                        <div class="flat-box background-wrong">
                            <img src="img/guide/low_light-wrong-lg.jpg" alt="Yetersiz ışıkta çekilmiş fotoğraf" class="img-responsive hidden-xs hidden-sm visible-md visible-lg">
                            <img src="img/guide/low_light-wrong-sm.jpg" alt="Yetersiz ışıkta çekilmiş fotoğraf" class="img-responsive visible-xs visible-sm hidden-md hidden-lg">

                            <p class="title padding-bottom-sm">Yanlış Örnek</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="flat-box background-right">
                            <img src="img/guide/low_light-right-lg.jpg" alt="Yeterli ışıkta çekilmiş fotoğraf" class="img-responsive hidden-xs hidden-sm visible-md visible-lg">
                            <img src="img/guide/low_light-right-sm.jpg" alt="Yeterli ışıkta çekilmiş fotoğraf" class="img-responsive visible-xs visible-sm hidden-md hidden-lg">

                            <p class="title padding-bottom-sm">Doğru Örnek</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h1>Işık</h1>

                        <p>Tasarlanmasını istediğiniz fotoğrafın mümkün olduğunca ışık alan bir mekanda,petinizin hatlarının net seçilebilecek bir aydınlıkta tercih edilmesi oldukça önemlidir.Yetersiz ışık,tasarlanacak olan resmin kalitesini doğrudan etkileyecektir.Sol tarafta görmüş olduğunuz doğru ve yanlış örnekleri inceleyerek daha net bir fikir sahibi olabilirsiniz.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 comparison-box">
                    <div class="col-md-4">
                        <h1>Netlik</h1>

                        <p>Fotoğraf seçme kriterleri arasında en dikkat edilmesi gereken husus netliktir.Tasarımın kalitesini yüksek tutmak adına mümkün olduğunca iyi bir çözünürlükte,flu olmayan bir fotoğraf tercih edilmesi oldukça önemlidir.Sağ tarafta görmüş olduğunuz doğru ve yanlış örnekleri inceleyerek daha net bir fikir sahibi olabilirsiniz.</p>
                    </div>

                    <div class="col-md-4">
                        <div class="flat-box background-wrong">
                            <img src="img/guide/not_focused-wrong-lg.jpg" alt="Odaklanmamış fotoğraf" class="img-responsive hidden-xs hidden-sm visible-md visible-lg">
                            <img src="img/guide/not_focused-wrong-sm.jpg" alt="Odaklanmamış fotoğraf" class="img-responsive visible-xs visible-sm hidden-md hidden-lg">

                            <p class="title padding-bottom-sm">Yanlış Örnek</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="flat-box background-right">
                            <img src="img/guide/not_focused-right-lg.jpg" alt="Odaklanmış fotoğraf" class="img-responsive hidden-xs hidden-sm visible-md visible-lg">
                            <img src="img/guide/not_focused-right-sm.jpg" alt="Odaklanmış fotoğraf" class="img-responsive visible-xs visible-sm hidden-md hidden-lg">

                            <p class="title padding-bottom-sm">Doğru Örnek</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 comparison-box">
                    <div class="col-md-4">
                        <div class="flat-box background-wrong">
                            <img src="img/guide/distant-wrong-lg.jpg" alt="Hayvan uzaktayken çekilmiş fotoğraf" class="img-responsive hidden-xs hidden-sm visible-md visible-lg">
                            <img src="img/guide/distant-wrong-sm.jpg" alt="Hayvan uzaktayken çekilmiş fotoğraf" class="img-responsive visible-xs visible-sm hidden-md hidden-lg">

                            <p class="title padding-bottom-sm">Yanlış Örnek</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="flat-box background-right">
                            <img src="img/guide/distant-right-lg.jpg" alt="Hayvan yeterli yakınlıktayken çekilmiş fotoğraf" class="img-responsive hidden-xs hidden-sm visible-md visible-lg">
                            <img src="img/guide/distant-right-sm.jpg" alt="Hayvan yeterli yakınlıktayken çekilmiş fotoğraf" class="img-responsive visible-xs visible-sm hidden-md hidden-lg">

                            <p class="title padding-bottom-sm">Doğru Örnek</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h1>Uzaklık</h1>

                        <p>Tasarlanmasını istediğiniz fotoğrafın,petinizin tüm detaylarını tasarıma aktarabilmemiz adına peti cepheden gören bir açıda ve yakın planda çekilmiş olması gerekmektedir.Sol tarafta görmüş olduğunuz doğru ve yanlış örnekleri inceleyerek daha net bir fikir sahibi olabilirsiniz.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 comparison-box">
                    <div class="col-md-4">
                        <h1>Tek Başına</h1>

                        <p>Tasarlanmasını istediğiniz fotoğrafta petiniz tek başına olmalı,yanında herhangi bir başka pet veya kişi olmamalıdır.Sağ tarafta görmüş olduğunuz doğru ve yanlış örnekleri inceleyerek daha net bir fikir sahibi olabilirsiniz.</p>
                    </div>

                    <div class="col-md-4">
                        <div class="flat-box background-wrong">
                            <img src="img/guide/alone-wrong-1-lg.jpg" alt="Birden fazla hayvanın fotoğrafı" class="img-responsive hidden-xs hidden-sm visible-md visible-lg">
                            <img src="img/guide/alone-wrong-1-sm.jpg" alt="Birden fazla hayvanın fotoğrafı" class="img-responsive visible-xs visible-sm hidden-md hidden-lg">

                            <p class="title padding-bottom-sm">Yanlış Örnek 1</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="flat-box background-wrong">
                            <img src="img/guide/alone-wrong-2-lg.jpg" alt="Hayvanın sahibiyle fotoğrafı" class="img-responsive hidden-xs hidden-sm visible-md visible-lg">
                            <img src="img/guide/alone-wrong-2-sm.jpg" alt="Hayvanın sahibiyle fotoğrafı" class="img-responsive visible-xs visible-sm hidden-md hidden-lg">

                            <p class="title padding-bottom-sm">Yanlış Örnek 2</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
