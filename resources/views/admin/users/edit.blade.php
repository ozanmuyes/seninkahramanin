@extends("layouts.admin.default")

@section("title", "Kullanıcı Düzenle")
@section("subtitle", "Kullanıcının belirli hesap ayarlarını değiştirin")

@section("breadcrumb")
    {!! Breadcrumbs::render("admin.users.edit") !!}
@endsection

@section("content")
    <div class="row">
        <div class="col-md-6">
            <div class="box box-warning">
                {!! Form::model($user, ["role" => "form"]) !!}
                    <div class="box-body">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                {!! Form::label("first_name", "İsim") !!}
                                {!! Form::text(
                                    "first_name",
                                    null,
                                    [
                                        "class" => "form-control",
                                        "required" => "required",
                                        "minlength" => 2,
                                        "maxlength" => 63
                                    ])
                                !!}
                            </div>

                            <div class="form-group col-lg-6">
                                {!! Form::label("last_name", "Soyisim") !!}
                                {!! Form::text(
                                    "last_name",
                                    null,
                                    [
                                        "class" => "form-control",
                                        "required" => "required",
                                        "minlength" => 3,
                                        "maxlength" => 64
                                    ])
                                !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label("username", "Kullanıcı İsmi") !!}
                            {!! Form::text(
                                "username",
                                null,
                                [
                                    "class" => "form-control",
                                    "readonly" => "readonly",
                                    "tabindex" => -1
                                ])
                            !!}
                            <p class="help-block" for="title">Kullanıcı ismi, girilen kullanıcı ismine ve soyismine göre otomatik olarak oluşturulur.</p>
                        </div>

                        <div class="form-group">
                            {!! Form::label("email", "E-Mail Adresi") !!}
                            {!! Form::email(
                                "email",
                                null,
                                [
                                    "class" => "form-control",
                                    "required" => "required"
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label("password", "Şifre") !!}
                            {!! Form::password(
                                "password",
                                [
                                    "class" => "form-control",
                                    "required" => "required",
                                    "minlength" => 5
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label("role", "Rol") !!}
                            {!! Form::select(
                                "role",
                                $roles,
                                $user["role"],
                                [
                                    "class" => "form-control",
                                    "required" => "required"
                                ])
                            !!}
                        </div>

                        <div class="form-group">
                            @include(
                                "partials.admin.cropper",
                                [
                                    "label" => "Profil Resmi",
                                    "uploadButtonText" => "Araştır...",
                                    "placeholder" => $user["profilePicture"],
                                    "autoCropArea" => 1
                                ]
                            )
                        </div>
                    </div>

                    <div class="box-footer">
                        {!! Form::submit("Değişiklikleri Kaydet", ["class" => "btn btn-success"]) !!}
                        {!! Form::reset("Değişiklikleri Geri Al", ["class" => "btn btn-default"]) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section("scripts")
    @parent

    {!! Html::script("js/admin/speakingurl.min.js") !!}
    {!! Html::script("js/admin/parsley/parsley.remote.js") !!}
    {!! Html::script("js/admin/parsley/i18n/tr.js") !!}

    <script>
        // Slug
            var $first_name = $("input#first_name"),
                $last_name = $("input#last_name"),
                $username = $("input#username");

            $first_name.on("input", function () {
                updateSlug();
            });

            $last_name.on("input", function () {
                updateSlug();
            });

            function updateSlug() {
                $username.val(getSlug(
                    $first_name.val() + " " + $last_name.val(),
                    {
                        lang: "tr"
                    }
                ));
            }

        // TODO HACK Reset to placeholder when form is reset

        // Parsley
            window.Parsley.setLocale("tr");

            $("form").parsley({
                errorClass: "has-error",
                classHandler: function (el) {
                    return el.$element.closest(".form-group");
                },
                errorsContainer: function (el) {
                    return el.$element.closest(".form-group");
                },
                errorsWrapper: "<span class='help-block'></span>",
                errorTemplate: "<span></span>"
            });
    </script>
@endsection
