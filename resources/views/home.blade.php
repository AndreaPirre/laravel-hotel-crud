@extends('layouts.main-layout')
@section('content')

    <h1>
        <a href="{{ route('paganti-index') }}">
            PAGANTI
        </a>

        <br>

        <a href="{{ route('ospiti-index') }}">
            OSPITI
        </a>

            <br>

        <a href="{{ route('conf-index')}}">
            CONFIGURAZIONI
        </a>

        <br>

    <a href="{{ route('stanze-index')}}">
        STANZE
    </a>
    </h1>

@endsection
