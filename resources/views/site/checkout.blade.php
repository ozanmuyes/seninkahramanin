@extends("layouts.site.default")

@section("title", "Ödeme Bilgileri")

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
                    ÖDEME SAYFASI

                    <div class="form-group">
                        {!! Form::label("text", "Kart Numarası") !!}
                        {!! Form::email("text", null, ["class" => "form-control input-lg", "required" => true, "autofocus" => "autofocus", "pattern" => "^4[0-9]{12}(?:[0-9]{3})?$"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label("text", "Kart Sahibinin İsmi ve Soyismi") !!}
                        {!! Form::email("text", null, ["class" => "form-control input-lg", "required" => true]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label("text", "Kartın Son Kullanma Tarihi") !!}
                        {!! Form::email("text", null, ["class" => "form-control input-lg", "required" => true, "placeholder" => "AA/YYYY", "pattern" => "^(0?[1-9]|1[012])$"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label("text", "CVV") !!}
                        {!! Form::email("text", null, ["class" => "form-control input-lg", "required" => true, "placeholder" => "000", "pattern" => "[0-9]{3}"]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label("password", "Şifreniz") !!}
                        {!! Form::password("password", ["class" => "form-control input-lg", "required" => true]) !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label("password", "Sipariş Teslim Adresiniz") !!}  
                      <textarea name="InputMessage" class="form-control" rows="5" required></textarea>
                      
                    </div>

                    {!! Form::submit("Siparişi Tamamla", ["class" => "btn btn-lg btn-success btn-block"]) !!}
                {!! Form::close() !!}
            </section>
        </div>
    </div>
@endsection

@section("styles")
    @parent

    {!! Html::style('css/site/auth/login.css') !!}
@endsection
