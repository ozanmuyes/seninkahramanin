@extends("layouts.site.default")

@section("title", "Rehber")

@section("content")

<div class="container">

        <div class="row">
            <div class="col-md-12 guide-title">
                <h1 class="guide-text">FOTOĞRAFINIZI SEÇERKEN...</h1>
            </div>
        </div>

      <div class="row">
        <div class="col-md-12 guiderow">
          <div id="secondSlider">
            <ul class="slides">
              <li>

                <div class="col-md-4">
                  <div class="flat-box">
                    <div class="colourway colour1"></div>
                    <p class="title">Doğru Örnek</p>
                    <p class="feature-text">fotoğrafın neden basarılı olduğuna dair açıklama yapılabilecek alan.</p>
                  </div>
                </div>

                <div class="col-md-4">
                    <div class="flat-box">
                    <div class="colourway colour2"></div>
                    <p class="title">Kötü Örnek</p>
                    <p class="feature-text">fotoğrafın neden basarısız olduğuna dair açıklama yapılabilecek alan.</p>
                    </div>
                </div>


                <div class="col-md-4 design-content">
                    <h1>Yeterli ışık</h1>
                    <p>Isıklandırma hakkında gerekli bilgiler
                    girilebilecek bir açıklama alanı. Detaylı bilgiler de girilebilecek bir açıklama alanı. Fotoğraf açısı hakkında gerekli bilgiler
                    girilebilecek bir açıklama alanı. Detaylı bilgiler de girilebilecek bir açıklama alanı</p>
                    <br>

                    <div class="text-right controlsud">
                        <a href="prev" class="prev"><i class="fa fa-angle-left fa-3x"></i></a>
                        <a href="next" class="next"><i class="fa fa-angle-right fa-3x"></i></a>
                    </div>
                </div>

              </li>
            </ul>
          </div>
        </div>
      </div>



    <div class="row">
        <div class="col-md-12 guiderow">
          <div id="secondSlider">
            <ul class="slides">
              <li>

                <div class="col-md-4 design-content">
                  <h1>Bir miktar çözünürlük</h1>
                  <p>Çözünürlük hakkında gerekli bilgiler
                    girilebilecek bir açıklama alanı. Detaylı bilgiler de girilebilecek bir açıklama alanı. Fotoğraf açısı hakkında gerekli bilgiler
                    girilebilecek bir açıklama alanı. Detaylı bilgiler de girilebilecek bir açıklama alanı.</p>
                    <div class="text-right controls-medium">
                        <a href="prev" class="prev"><i class="fa fa-angle-left fa-3x"></i></a>
                        <a href="next" class="next"><i class="fa fa-angle-right fa-3x"></i></a>
                    </div>
                </div>

                <div class="col-md-4">
                  <div class="flat-box">
                    <div class="colourway colour1"></div>
                    <p class="title">Doğru Örnek</p>
                    <p class="feature-text">fotoğrafın neden basarılı olduğuna dair açıklama yapılabilecek alan.</p>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="flat-box">
                    <div class="colourway colour2"></div>
                    <p class="title">Kötü Örnek</p>
                    <p class="feature-text">fotoğrafın neden basarısız olduğuna dair açıklama yapılabilecek alan.</p>
                  </div>
                </div>

              </li>
            </ul>
          </div>
        </div>
      </div>


    <div class="row">
        <div class="col-md-12 guiderow">
          <div id="secondSlider">
            <ul class="slides">
              <li>

                <div class="col-md-4">
                  <div class="flat-box">
                    <div class="colourway colour1"></div>
                    <p class="title">Doğru Örnek</p>
                    <p class="feature-text">fotoğrafın neden basarılı olduğuna dair açıklama yapılabilecek alan.</p>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="flat-box">
                    <div class="colourway colour2"></div>
                    <p class="title">Kötü Örnek</p>
                    <p class="feature-text">fotoğrafın neden basarısız olduğuna dair açıklama yapılabilecek alan.</p>
                  </div>
                </div>

                <div class="col-md-4 design-content">
                    <h1>Doğru Açı</h1>
                    <p>Fotoğraf açısı hakkında gerekli bilgiler
                    girilebilecek bir açıklama alanı. Detaylı bilgiler de girilebilecek bir açıklama alanı. Fotoğraf açısı hakkında gerekli bilgiler
                    girilebilecek bir açıklama alanı. Detaylı bilgiler de girilebilecek bir açıklama alanı...</p>
                    <br>

                    <div class="text-right controlsud">
                    <a href="prev" class="prev"><i class="fa fa-angle-left fa-3x"></i></a>
                    <a href="next" class="next"><i class="fa fa-angle-right fa-3x"></i></a>
                    </div>
                </div>

              </li>
            </ul>
          </div>
        </div>
    </div>

</div>
@endsection

@section("styles")
    @parent

    {!! Html::style('css/site/guide.css') !!}
@endsection
