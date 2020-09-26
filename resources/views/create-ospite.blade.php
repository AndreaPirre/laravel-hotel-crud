@extends('layouts.main-layout')
@section('content')

    <h1>
        NUOVO OSPITE
    </h1>

    <form action="{{ route('ospite-store') }}" method="post">
        @csrf
        @method('POST')

        <div class="form-group">

            <label for="name">NAME</label>
            <br>
            <input type="text" name="name" value="" placeholder="Name">

        </div>

        <br>
        <br>

        <div class="form-group">

            <label for="Lastname">Lastname</label>
            <br>
            <input type="text" name="lastname" value="" placeholder="Lastaname">

        </div>

        <br>
        <br>

        <div class="form-group">

            <label for="date_of_birth">Date of Birth</label>
            <br>
            <input type="date" name="date_of_birth" value="" placeholder="Date of Birth">

        </div>

        <br>
        <br>

        <div class="form-group">

            <label for="document_type">Document Type</label>
            <br>
            <select class="" name="document_type">
                <option value="CI">CI</option>
                <option value="driver license">Driver License</option>

            </select>

        </div>

        <br>
        <br>

        <div class="form-group">

            <label for="document_number">Document Number</label>
            <br>
            <input type="text" name="document_number" value="" placeholder="Document Number">

        </div>
        <br>
        <br>

        <button type="submit" name="button">Crea nuovo ospite</button>

    </form>



@endsection
