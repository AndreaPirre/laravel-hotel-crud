@extends('layouts.main-layout')
@section('content')

    <h1>OSPITI</h1>
    <h3>
        <a href="{{ route('ospite-create') }}">AGGIUNGI NUOVO OSPITE</a>
    </h3>

    <ul>
        @foreach ($ospiti as $ospite)


        <li>
            <a href="{{ route('ospite-show', $ospite -> id) }}">
                {{ $ospite -> name }}
                {{ $ospite -> lastname }}
            </a>
        </li>


        @endforeach
    </ul>


@endsection
