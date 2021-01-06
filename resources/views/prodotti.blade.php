@extends('layouts.app')
@section('content')
    <div class="products">
        <div class="container">
            @foreach ($formati as $tipo => $pasta)
                <h1>{{$tipo}}</h1>
                <div class="card-cont">
                    @foreach ($pasta as $key => $formato)
                        <div class="card">
                            <img src="{{$formato['src']}}" alt="{{$formato['titolo']}}">
                            <div class="description">
                                <a href="{{route('details', ['id' => $key])}}">{{$formato['titolo']}}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>

    </div>
@endsection

@section('page-title', 'Prodotti - La Molisana')
