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
        @if ($id-1 >= 0)
            <div class="chevron-left">
                <a href="{{route('prodotti.show', $id-1)}}"><i class="fas fa-chevron-left"></i></a>
            </div>
        @endif
        @if ($id+1 <= count($cards)-1)
            <div class="chevron-right">
                <a href="{{route('prodotti.show', $id+1)}}"><i class="fas fa-chevron-right"></i></a>
            </div>
        @endif
    </main>
@endsection

@section('script')
    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
@endsection
