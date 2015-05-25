@extends('examples.layout')
@section('title')
    Curso Laravel styde.net
@stop
@section('content')
    <h1>Curso básico de Laravel 5</h1>
    <p>
        @if (isset($user))
            Bienvenidos {{ $user }}
        @else
            [login]
        @endif
    </p>
@stop


