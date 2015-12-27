<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="token" content="{{ csrf_token() }}">

        <title>Senin Kahramanın - @yield("title")</title>

        {!! Html::style("css/layouts/site/bootstrap.min.css") !!}
        {{-- {!! Html::style("//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css") !!} --}}
        {!! Html::style("css/layouts/font-awesome.min.css") !!}

        {!! Html::style("css/site/style.min.css") !!}

        {!! Html::style("css/layouts/site/fonts.css") !!}
        {!! Html::style("css/layouts/site/bootstrap-social.css") !!}

        {{-- <link href='https://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Advent+Pro:500&subset=latin-ext,latin' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'> --}}

        <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
        <script type="text/javascript">
            // window.cookieconsent_options = {
            //     "message": "Bu web sitesi en iyi deneyimi yaşayabilmeniz için bilgisayarınızda küçük bir çerez " +
            //         "dosyası tutar. Siteyi kullanmaya devam ederek bunu kabul etmiş olursunuz.",
            //     "dismiss": "Tamam",
            //     "learnMore": "Daha fazla bilgi",
            //     "link": "http://example.com/cookiepolicy",
            //     "theme": "light-bottom"
            // };
        </script>

        {{-- <script type="text/javascript" src="//s3.amazonaws.com/cc.silktide.com/cookieconsent.latest.min.js"></script> --}}
        <!-- End Cookie Consent plugin -->

        <script type="text/javascript"> //<![CDATA[
var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.comodo.com/" : "http://www.trustlogo.com/");
document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
//]]>
</script>
    </head>

    <body>
        {{-- @include("partials.site.header") --}}

        <main class="container-fluid" role="main">
            <div class="row">
                <div id="flash" class="col-md-6 col-md-offset-3">
                    @include('flash::message')
                </div>
            </div>

            @yield("content")

            @include("partials.site.footer")
        </main>

        @yield("styles")

        <script language="JavaScript" type="text/javascript">
TrustLogo("https://seninkahramanin.com/img/comodo_secure_100x85_transp.png", "CL1", "none");
</script>
<a  href="https://www.positivessl.com/" id="comodoTL">Positive SSL</a>
        {!! Html::script("js/jquery-2.1.4.min.js") !!}
        {!! Html::script("js/layouts/bootstrap.min.js") !!}
        {!! Html::script("js/layouts/site/default.js") !!}
        @yield("scripts")
    </body>
</html>
