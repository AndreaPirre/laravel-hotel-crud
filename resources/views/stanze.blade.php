@extends('layouts.main-layout')
@section('content')

    <h1>STANZE</h1>

    <h3>
        <a href="{{ route('stanze-create') }}">AGGIUNGI UNA NUOVA STANZA</a>
    </h3>

    <ul>
        @foreach ($stanze as $stanza)


        <li>
            <a href="{{ route('stanze-show', $stanza -> id) }}">
                {{ $stanza-> room_number }}
                
            </a>
        </li>






        @endforeach
    </ul>


@endsection
