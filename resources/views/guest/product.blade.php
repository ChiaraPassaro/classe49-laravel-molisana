@extends('guest.layout.base')

@section('documentTitle')
    {{$nomePagina}}
@endsection

@section('content')
  <div class="card text-center">
    <div class="card__img">
      <img src="{{ $product['src-p'] }}" alt="{{$product['titolo'] }}">
    </div>
    <div class="card__titolo">
      <h2>{{ $product['titolo'] }}</h2>
    </div>
  </div>
@endsection