
@extends('guest.layout.base')

@section('documentTitle')
    {{$nomePagina}}
@endsection

@section('content')
{{-- @php
  dd($pasta)    
@endphp --}}
  <main class="products">
    <h2 class="product__type container-90">Lunga</h2>
    <div class="products__list container-90">
      @foreach ($lunghe as $item_pasta)
          <div class="card text-center">
            <div class="card__img">
              <img src="{{ $item_pasta['src-p'] }}" alt="{{$item_pasta['titolo'] }}">
            </div>
            <div class="card__titolo">
              <h2><a href="{{route('product', $item_pasta['id'])}}">{{ $item_pasta['titolo'] }}</a></h2>
            </div>
          </div>
      @endforeach
    </div>
    <h2 class="product__type container-90">Corta</h2>
    <div class="products__list container-90">
      @foreach ($corte as $item_pasta)
          <div class="card text-center">
            <div class="card__img">
              <img src="{{ $item_pasta['src-p'] }}" alt="{{$item_pasta['titolo'] }}">
            </div>
            <div class="card__titolo">
              <h2><a href="{{route('product', $item_pasta['id'])}}">{{ $item_pasta['titolo'] }}</a></h2>
            </div>
          </div>
      @endforeach
    </div>
    <h2 class="product__type container-90">Cortissima</h2>
    <div class="products__list container-90">
      @foreach ($cortissime as $item_pasta)
          <div class="card text-center">
            <div class="card__img">
              <img src="{{ $item_pasta['src-p'] }}" alt="{{$item_pasta['titolo'] }}">
            </div>
            <div class="card__titolo">
              <h2><a href="{{route('product', $item_pasta['id'])}}">{{ $item_pasta['titolo'] }}</a></h2>
            </div>
          </div>
      @endforeach
    </div>
  </main>
@endsection

@section('scripts')
  <script src="{{asset('js/app.js')}}"></script>
@endsection