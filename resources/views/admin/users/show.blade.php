@extends("layouts.admin.default")

@section("title", $user->name)
@section("subtitle", "Kullanıcının profilini ve diğer bilgilerini görüntüleyin")

@section("breadcrumb")
    {!! Breadcrumbs::render("admin.users.show") !!}
@endsection

@section("content")
    <div class="row">
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-body box-profile">
                    {!! Html::image($user->profilePicture()->path, $user->profilePicture()->alt, ["class" => "profile-user-img img-responsive img-circle"]) !!}
                    <h3 class="profile-username text-center">{{ $user->name }}</h3>
                    <p class="text-muted text-center">{{ $user->username }}</p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Verdiği Siparişlerin Sayısı</b> <a class="pull-right">1,322</a>
                        </li>

                        <li class="list-group-item">
                            <b>Son Verdiği Sipariş Tarihi</b> <a class="pull-right">543</a>
                        </li>

                        <li class="list-group-item">
                            <b>Son Giriş Yaptığı Tarih</b> <a class="pull-right">13,287</a>
                        </li>
                    </ul>

                    <a class="btn btn-primary btn-block" href="#"><b>E-Mail Gönder</b></a>
                </div>
            </div>
        </div>
    </div>
@endsection