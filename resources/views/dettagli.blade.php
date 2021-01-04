@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$formato['titolo']}}</h1>
    </div>
    <div class="head-product">
        <img src="{{$formato['src-h']}}" alt="{{$formato['titolo']}}">
    </div>
    <div class="pack-pasta">
        <img src="{{$formato['src-p']}}" alt="pack of pasta">
    </div>
    <div class="prod-desc">
        <div class="container">
            <p>{!!$formato['descrizione']!!}</p>
        </div>

    </div>


@endsection

@section('page-title', $formato['titolo'] . ' Prodotti - La Molisana')
