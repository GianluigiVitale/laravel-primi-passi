@php
    $cards = config('products');

    $prodotto = $cards[$id];
@endphp

@extends('layout.user')

@section('titolo')
    {{$prodotto['titolo']}}
@endsection

@section('main')
    <main class="product">
        <div class="container">
            <h1>{{$prodotto['titolo']}}</h1>
            <img src="{{$prodotto['src']}}" alt="{{$prodotto['titolo']}}">
            <p>{!!$prodotto['descrizione']!!}</p>
        </div>
    </main>
@endsection
