@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Prodotti</h1>
        <div class="card-cont">
            @foreach ($pasta as  $singola_pasta)
                <div class="card">
                    <img src="{{$singola_pasta['src']}}" alt="{{$singola_pasta['titolo']}}">
                    <div class="description">
                        <a href="#">{{$singola_pasta['titolo']}}</a>

                    </div>

                </div>

            @endforeach

        </div>

    </div>
@endsection

@section('page-title', 'Prodotti - La Molisana')
