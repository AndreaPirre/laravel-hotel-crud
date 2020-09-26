@extends('layouts.main-layout')
@section('content')

    <h1>OSPITE:
        {{ $ospite -> name }}
        {{ $ospite -> lastname }}

    </h1>

    <ul>


        <li>

            DATE OF BIRTH:    {{ $ospite -> date_of_birth }}
        </li>

        <li>

            DOCUMENT TYPE:     {{ $ospite -> document_type }}
        </li>

        <li>

            DOCUMENT NUMBER:    {{ $ospite -> document_number }}
        </li>


    </ul>

    <h2>
        <a href="{{ route('ospiti-index') }}">Ritorna alla lista ospiti</a>
    </h2>



@endsection
