
@extends('guest.layout.base')

@section('documentTitle')
    {{$nomePagina}}
@endsection

@section('content')
{{-- @php
  dd($pasta)    
@endphp --}}
  <main class="products">
    <h1 class="products__title">Siamo in home</h1>
    <div class="products__list container-90">
      @foreach ($pasta as $item_pasta)
          <div class="card text-center">
            <div class="card__img">
              <img src="{{ $item_pasta['src-p'] }}" alt="{{$item_pasta['titolo'] }}">
            </div>
            <div class="card__titolo">
              <h2>{{ $item_pasta['titolo'] }}</h2>
            </div>
          </div>
          @endforeach
    </div>
  </main>
@endsection

@section('scripts')
  <script src="{{asset('js/app.js')}}"></script>
@endsection