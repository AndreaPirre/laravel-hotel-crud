@extends('layouts.main-layout')
@section('content')

    <h1>CREATE STANZA</h1>


    <form action="{{ route('stanze-store') }}" method="post">
        @csrf
        @method('POST')

        <div class="form-group">

            <label for="title">ROOM NUMBER</label>
            <br>
            <input type="text" name="room_number" value="" placeholder="room number">

        </div>

        <div class="form-group">

            <label for="description">FLOOR</label>
            <br>
            <input type="text" name="floor" value="" placeholder="floor">

        </div>

        <div class="form-group">

            <label for="description">BEDS</label>
            <br>
            <input type="text" name="beds" value="" placeholder="beds">

        </div>

        <button type="submit" name="button">CREA NUOVA CONFIGURAZIONE</button>
    </form>


@endsection
