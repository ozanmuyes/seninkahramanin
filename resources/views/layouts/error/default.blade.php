<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>Senin Kahramanın - Hata</title>

        {!! Html::style('css/layouts/site/bootstrap.min.css') !!}
        {!! Html::style('css/layouts/font-awesome.min.css') !!}
        {!! Html::style('css/layouts/error/default.css') !!}
        {!! Html::style('css/layouts/global.css') !!}
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include("partials.site.header")

                    <div class="error-template">
                        <h1 class="text-danger">
                            @yield("statusCode")

                            <small class="text-white">
                                @yield("message")
                            </small>
                        </h1>

                        <div class="error-details">
                            Bir şeyler ters gitti :(
                        </div>

                        <div class="error-actions">
                            <a href="{{ URL::previous() }}" class="btn btn-primary btn-lg">
                                <i class="fa fa-arrow-left"></i>&nbsp;
                                Önceki Sayfa
                            </a>

                            <a href="/" class="btn btn-default btn-lg">
                                <i class="fa fa-home"></i>&nbsp;
                                Anasayfa
                            </a>
                        </div>
                    </div>

                    @include("partials.site.footer")
                </div>
            </div>
        </div>

        {!! Html::script("js/jquery-2.1.4.min.js") !!}
        {!! Html::script("js/layouts/bootstrap.min.js") !!}
    </body>
</html>