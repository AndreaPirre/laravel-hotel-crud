@extends('layouts.main-layout')
@section('content')

    <h1>CREATE CONFIGURAZIONI</h1>


    <form action="{{ route('conf-store') }}" method="post">
        @csrf
        @method('POST')

        <div class="form-group">

            <label for="title">TITLE</label>
            <br>
            <input type="text" name="title" value="" placeholder="title">

        </div>

        <div class="form-group">

            <label for="description">Description</label>
            <br>
            <input type="text" name="description" value="" placeholder="description">

        </div>

        <button type="submit" name="button">CREA NUOVA CONFIGURAZIONE</button>
    </form>


@endsection
