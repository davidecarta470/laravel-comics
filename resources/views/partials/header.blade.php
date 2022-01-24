
<header class="container">
  <div>
    <a href="{{route('home')}}">
      <img src="{{ asset('img/dc-logo.png') }}" alt="">
    </a>
  </div>
  <div class="menu-right">
    <ul>
      @foreach (config('menuHeader') as $item )
        <li>
          <a class="{{(Route::currentRouteName()===strtolower($item) ? "active":"")}}" href="{{route(strtolower($item))}}">
            <strong>{{$item}}</strong>
          </a>
        </li> 
      @endforeach
          
    </ul>
  </div>
  <div class="search">
    <input type="text">
    <button class="btn dc-btn">Search<i class="ms-2 fas fa-search"></i></button>

  </div>

</header>
   