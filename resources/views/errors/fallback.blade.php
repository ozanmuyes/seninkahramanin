@extends('layouts.error.default')

@section("statusCode", $exception->getStatusCode())

@if(!empty($exception->getMessage()))
    @section("message", $exception->getMessage())
@else
    @section("message", \Symfony\Component\HttpFoundation\Response::$statusTexts[$exception->getStatusCode()])
@endif