@extends('layouts.main-layout')
@section('content')

    <h1>CONFIGURAZIONI: <br>{{$conf -> title}}</h1>
    <span>
        {{ $conf -> description }}
    </span>


@endsection
