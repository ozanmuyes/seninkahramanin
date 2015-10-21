@extends("layouts.site.default")

@section("title", trans("menu.my_profile"))

@section("content")
	<br>
    Hoş geldiniz {{ $user->name }} !
    <br>

    <h1>Önceki Alışverişleriniz</h1>



@endsection
