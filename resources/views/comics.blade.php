<?php
    $counter=0; 
    if(isset($_GET["incr"])){$counter=$_GET["incr"];}else{
      $_GET["incr"]=0;
    }
    if(isset($_GET["decr"])){$counter=$_GET["decr"];}else{
      $_GET["decr"]=0;
    }
    
    
?>
@extends('layouts.main')
@section('content')
    

<div class="comics">
  <form class="incr-form" action="comics" methods="get">
    <input style="display: none;"  type="text" name="incr" value="{{$counter+1}}">
    <button class="btn btn-secondary" type="submit">SUCC</button>
  </form>
  <form class="decr-form" action="comics" methods="get">
    <input style="display: none;" type="text" name="decr" value="{{$counter-1}}">
    <button class="btn btn-secondary" type="submit">PREV</button>
  </form>




@foreach ($comics as $key=>$item) 

<div class="php-class <?php if($key!=$counter) echo "display-none"; ?>">
  <div class="top">
    <div class="container">
      <div class="img-label">
        <img src="{{($item["thumb"])}}" alt="">
      </div>
    </div>
  </div>




  <div class="main">
    <div class="container">
      
      <div class="main-left">
        <div class="comics-info">
          <h2>{{$item["title"]}}</h2>
          <div class="aviability">
            <div class="aviability-left">
              <div>U.S. price : <span>{{($item["price"])}}</span> </div>
              <div> AVILABLE</div>
            </div>
            <div class="aviability-right">
              <div>Check Availability</div>
            </div>
          </div>
          <div class="comics-description">
            {{$item["description"]}}
          </div>
        </div>
      </div>

      <div class="main-right">
        <h4 class="text-end">ADVERTISEMENT</h4>
        <div class="comics-img">
          <img src="{{asset('img/adv.jpg')}}" alt="">
        </div>
      </div>
    </div>
  </div>



  <div class="bottom">
    <div class="container">
      <div class="up-bottom">
        <div class="up-bottom-left">
          <h3>Talent</h3>
          <table class="table">
            <tbody>
              <tr>              
                <td colspan="2">Art by : </td>
                <td>
                  @foreach ($item["artists"] as $index=>$artist)
                  <span>
                    <span>{{$artist}}</span>
                    @if ($index < count($item["artists"])-1)
                    <span>,</span>
                    @endif 
                  </span>
                  @endforeach
                </td>
              </tr>
                    
              <tr>              
                <td colspan="2">Writen by : </td>
                <td> 
                  @foreach ($item["writers"]   as $index=>$writer)
                  <span>
                    <span>{{$writer}}</span>
                    @if ($index<count($item["writers"])-1)
                    <span>,</span>
                    @endif 
                  </span>
                  @endforeach
                </td>
              </tr>
            </tbody>
          </table>
                   
        </div>
        <div class="up-bottom-right">
          <h3>Specs</h2>
          <table class="table">
            <tbody>
              <tr>              
                <td colspan="2">Series : </td>
                <td><span>{{($item["series"])}}</span></td>
              </tr>
              <tr>              
                <td colspan="2">U.S. Price : </td>
                <td><span>{{($item["price"])}}</span></td>
              </tr>
              <tr>              
                <td colspan="2">On Sale Date : </td>
                <td><span>{{($item["sale_date"])}}</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div> 
   
    </div>
    <div class="down-bottom">
      <div class="container clearfix">
        <div class="cta-item">
          <div>DIGITAL COMICS</div>
          <div><img src="{{asset('img/cta-icons.png')}}" alt=""></div>
        </div>
        <div class="cta-item">
          <div>SHOP DC</div>
          <div><img src="{{asset('img/cta-icons.png')}}" alt=""></div>
        </div>
        <div class="cta-item">
          <div>COMIC SHOP LOCATOR</div>
          <div><img src="{{asset('img/cta-icons.png')}}" alt=""></div>
        </div>
        <div class="cta-item">
          <div>SUBSCRIPTION</div>
          <div><img src="{{asset('img/cta-icons.png')}}" alt=""></div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  
</div>

@endsection