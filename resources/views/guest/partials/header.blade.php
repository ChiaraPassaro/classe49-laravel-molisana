
<header class="container-90 text-center">
  <img class="header__logo" src="{{asset('img/marchio-sito-test.png')}}" alt="Logo">
  <nav class="header__nav ">
    <ul class="header__nav__list">
      <li class="header__nav__list-item {{ 'home' === Route::currentRouteName() ? 'active' : '' }} "><a href="{{route('home')}}">Home</a></li>
      <li class="header__nav__list-item {{ 'prodotti' === Route::currentRouteName() ? 'active' : '' }}"><a href="{{route('prodotti')}}">Prodotti</a></li>
      <li class="header__nav__list-item {{ 'news' === Route::currentRouteName() ? 'active' : '' }}"><a href="{{route('news')}}">News</a></li>
    </ul>
  </nav>
</header>