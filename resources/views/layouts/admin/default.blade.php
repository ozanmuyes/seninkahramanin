<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>Senin Kahramanın - Yönetim Paneli - @yield("title")</title>

        {!! Html::style('css/layouts/admin/bootstrap.min.css') !!}
        {!! Html::style('css/layouts/font-awesome.min.css') !!}
        {!! Html::style('css/layouts/admin/AdminLTE.min.css') !!}
        {!! Html::style('css/layouts/admin/skin-blue.min.css') !!}
        @yield("styles")

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="skin-blue sidebar-mini fixed">
        <div class="wrapper">
            @include("partials.admin.header")

            @include("partials.admin.sidebar")

            <div class="content-wrapper">
                <section class="content-header">
                    <div class="row">
                        <div id="flash" class="col-md-8">
                            @include('flash::message')
                        </div>
                    </div>

                    <h1>
                        @yield("title")
                        <small>@yield("subtitle")</small>
                    </h1>

                    @yield("breadcrumb")
                </section>

                <section class="content">
                    @yield("content")
                </section>
            </div>

            {{-- @include("partials.admin.footer") --}}
        </div>

        {!! Html::script("js/jquery-2.1.4.min.js") !!}
        {!! Html::script("js/layouts/bootstrap.min.js") !!}
        {!! Html::script("js/layouts/admin/jquery.slimscroll.min.js") !!}
        @yield("scripts")
        {!! Html::script("js/layouts/admin/adminlte/app.min.js") !!}
    </body>
</html>
