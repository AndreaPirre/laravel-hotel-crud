@extends('layouts.main-layout')
@section('content')

    <h1>CONFIGURAZIONI</h1>

    <h3>
        <a href="{{ route('conf-create') }}">AGGIUNGI UNA NUOVA CONFIGURAZIONE</a>
    </h3>

    <ul>
        @foreach ($configurazioni as $conf)


        <li>
            <a href="{{ route('conf-show', $conf -> id) }}">
                {{ $conf -> title }}
            </a>
        </li>


        @endforeach
    </ul>


@endsection
