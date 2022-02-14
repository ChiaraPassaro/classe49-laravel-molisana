@extends('guest.layout.base')

@section('documentTitle')
  {{$nomePagina}}
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endsection

@section('content')
{{-- @dd($product) --}}
  <div class="product__page">
    <div class="card text-center">
        <div class="card__title">
          <h2>{{ $product['titolo'] }}</h2>
        </div>
        <div class="card__img_h">
          <img src="{{ $product['src-h'] }}" alt="{{$product['titolo'] }}">
        </div>
        <div class="card__img">
          <img src="{{ $product['src-p'] }}" alt="{{ $product['titolo'] }}">
        </div>
        <div class="card__text container-90">
          {{-- per stampare html --}}
          {!! $product['descrizione'] !!}
          {{-- {{ $product['descrizione'] }} --}}
        </div>
      </div>
  </div>
@endsection