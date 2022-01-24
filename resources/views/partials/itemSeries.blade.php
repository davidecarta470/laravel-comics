
@foreach (config('comics') as $item)
  
<div class="item" >
  <div class="img-container">
    <img src="{{$item['thumb']}}" alt="">
  </div>
  <div class="item-text">{{$item["series"]}}</div>
</div>
@endforeach