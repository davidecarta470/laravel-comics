<div class="background">
  <div class="container">
    <ul >
      @foreach (config('listContent') as $item)
        <li >{{$item['menuItem']}} <img src="{{$item['url']}}" alt=""></li>     
      @endforeach
    </ul>
  </div>
</div> 
   