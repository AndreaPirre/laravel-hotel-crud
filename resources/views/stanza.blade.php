@extends('layouts.main-layout')
@section('content')

    <h1>STANZA:
        {{ $stanza -> room_number }}
        {{ $stanza -> floor }}
        {{ $stanza -> beds }}

    </h1>

    <ul>


        <li>

            ROOM NUMBER:    {{ $stanza -> room_number }}
        </li>

        <li>

            FLOOR:     {{ $stanza -> floor }}
        </li>

        <li>

            BEDS:    {{ $stanza -> beds }}
        </li>


    </ul>

    <h2>
        <a href="{{ route('stanze-index') }}">Ritorna alla lista stanze</a>
    </h2>



@endsection
