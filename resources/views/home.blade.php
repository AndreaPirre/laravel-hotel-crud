@extends('layouts.main-layout')
@section('content')

    <h1>
        <a href="{{ route('paganti-index') }}">
            PAGANTI
        </a>

        <br>
        <br>

        <a href="{{ route('ospiti-index') }}">
            OSPITI
        </a>

            <br>
            <br>

        <a href="{{ route('conf-index')}}">
            CONFIGURAZIONI
        </a>

        <br>
        <br>

    <a href="{{ route('stanze-index')}}">
        STANZE
    </a>

    <br>
    <br>

    <a href="{{ route('pagamenti.index')}}">
        PAGAMENTI
    </a>
    </h1>

@endsection
