<footer class="">
  <div class="top-footer container">

    <div class="second-background">
      <div class="footer-list-container ">
        
        @foreach (config('footerList') as $item)
        <ul>
          <li>{{$item['footerListTitle']}}</li>
          @foreach ($item['footerListitems'] as $item)
            
          <li >{{$item}}</li>
          @endforeach
        </ul>
        @endforeach

      </div>
    </div>
    
  </div>
  <div class="bottom-footer">
    <div class="container">
      <div>
       <button>SIGN-UP NOW!</button>
      </div>
      <div class="bottom-right-container">
        <span>FOLLOW US!</span>
        <ul>
        
          @foreach (config('footerImgs') as $item) 
          <li ><img src="{{asset($item)}}" alt=""></li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</footer>