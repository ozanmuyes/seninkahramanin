@extends("layouts.site.default")

@section("title", trans("menu.my_profile"))

@section("content")
    {{ $user->name }}
    <br>
    my profile - profilim
@endsection
