@extends("layouts.site.default")

@section("title", "Kullanıcı Girişi")

@section("content")
    <div id="pwd-container" class="row">
        <div class="col-md-4 col-md-offset-4">
            @if (($errorsCount = count($errors)) > 0)
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    @if ($errorsCount == 1)
                        {{ $errors->first() }}
                    @elseif ($errorsCount > 1)
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            @endif

            <section class="login-form">
                {!! Form::open(["class" => "form-login"]) !!}
                    {!! Html::image("img/logo-menu.png", "Seninkahramanin Logo", ["class" => "img-responsive"]) !!}

                    <div class="form-group">
                        {!! Form::label("email", "E-Mail Adresiniz") !!}
                        {!! Form::email("email", null, ["class" => "form-control input-lg", "required" => true, "autofocus" => "autofocus"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label("password", "Şifreniz") !!}
                        {!! Form::password("password", ["class" => "form-control input-lg", "required" => true]) !!}
                    </div>

                    {!! Form::submit("Giriş", ["class" => "btn btn-lg btn-success btn-block"]) !!}

                    <div id="remember" class="checkbox">
                        <label>
                            {!! Form::checkbox("remember", null, false) !!} Beni hatırla
                        </label>
                    </div>

                    <a class="btn btn-block btn-social btn-facebook">
                        <i class="fa fa-facebook"></i> Sign in with Facebook
                    </a>

                    <a class="btn btn-block btn-social btn-twitter">
                        <i class="fa fa-twitter"></i> Sign in with Twitter
                    </a>
                    <br><br><br>

                    <div class="row">

                        <div class="col-md-6">
                            <img src="img/password.jpg" class="img-responsive" style="width:50px; height:50px"> <a href="#">Şifremi Unuttum</a>
                        </div>

                        <div class="col-md-6">
                            <img src="img/signup.png" class="img-responsive" style="width:50px; height:50px"> <a href="#">Kayıt Ol</a>
                        </div>

                    </div>

                    {{--
                    {!! link_to("/kullanici/sifremi-unuttum", "Şifremi Unuttum") !!}
                    <br>
                    {!! link_to("/kayit", "Kayıt Ol") !!}

                     <div class="form-group">
                        {!! Html::link(route("Login.Provider", "facebook"), "Facebook", ["class" => "btn btn-primary btn-block"]) !!}
                        {!! Html::link(route("Login.Provider", "twitter"), "Twitter", ["class" => "btn btn-primary btn-block"]) !!}
                    </div>
                    --}}

                {!! Form::close() !!}

            </section>
        </div>
    </div>
@endsection

@section("styles")
    @parent

    {!! Html::style('css/site/auth/login.css') !!}
@endsection
