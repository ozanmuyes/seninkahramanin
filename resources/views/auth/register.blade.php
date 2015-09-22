@extends("layouts.site.default")

@section("title", "Yeni Kullanıcı")

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
                    BURAYA LOGO(!) GELECEK


                    {!! Form::hidden("twitter_id", $user["twitter_id"]) !!}
                    {!! Form::hidden("facebook_id", $user["facebook_id"]) !!}

                    {{-- 
                    <div class="form-group">
                        {!! Html::link(route("Register.Provider", "facebook"), "Facebook", ["class" => "btn btn-primary btn-block"]) !!}
                        {!! Html::link(route("Register.Provider", "twitter"), "Twitter", ["class" => "btn btn-primary btn-block"]) !!}
                    </div>
                    --}}



                    <div class="form-group">
                        {!! Form::label("first_name", "Adınız") !!}
                        {!! Form::text("first_name", $user["first_name"], ["class" => "form-control", "required" => true, "autofocus" => "autofocus"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label("last_name", "Soyadınız") !!}
                        {!! Form::text("last_name", $user["last_name"], ["class" => "form-control", "required" => true]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label("email", "E-Mail Adresiniz") !!}
                        {!! Form::email("email", $user["email"], ["class" => "form-control", "required" => true]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label("email_confirmation", "E-Mail Adresiniz (Tekrar)") !!}
                        {!! Form::email("email_confirmation", $user["email"], ["class" => "form-control", "required" => true]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label("password", "Şifreniz") !!}
                        {!! Form::password("password", ["id" => "inputPassword", "class" => "form-control", "required" => true]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label("password_confirmation", "Şifreniz (Tekrar)") !!}
                        {!! Form::password("password_confirmation", ["id" => "inputPassword", "class" => "form-control", "required" => true]) !!}
                    </div>



                    {!! Form::submit("Kayıt Ol", ["class" => "btn btn-lg btn-success btn-block"]) !!}

                    <div id="remember" class="checkbox">
                        <label>
                            {!! Form::checkbox("remember", null, false) !!} Beni hatırla
                        </label>
                    </div>

                {!! Form::close() !!}

            </section>
        </div>
    </div>
@endsection

@section("styles")
    @parent

    {!! Html::style('css/site/auth/register.css') !!}
@endsection
