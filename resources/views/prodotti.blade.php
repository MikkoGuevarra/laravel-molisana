@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Prodotti</h1>
        <div class="card-cont">
            @foreach ($formati as $key => $formato)
                <div class="card">
                    <img src="{{$formato['src']}}" alt="{{$formato['titolo']}}">
                    <div class="description">
                        <a href="{{route('details', ['id' => $key])}}">{{$formato['titolo']}}</a>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection

@section('page-title', 'Prodotti - La Molisana')
