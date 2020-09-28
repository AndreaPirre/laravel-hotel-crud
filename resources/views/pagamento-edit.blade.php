@extends('layouts.main-layout')
@section('content')

    <h1>PAGAMENTO EDIT:</h1>


    <form action="{{ route('pagamento.update', $pagamento -> id)}}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="status">STATUS</label><br>
            <input type="text" name="status" value="{{$pagamento -> status}}">

        </div>


        <br>

        <div class="form-group">
            <label for="price">PRICE</label><br>
            <input type="number" name="price" value="{{$pagamento -> price}}">

        </div>

        <br>

        <button type="submit" name="button">UPDATE</button>
    </form>


@endsection
