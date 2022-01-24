@extends('layouts.main')

@section('content')
  
<main> 
  
    
  <div class="series-container">
    <div class="wrapper container">
      <div class="current-series-absolute"><h3>CURRENT SERIES</h3></div>
      @include('partials.itemSeries')
    </div>
    @include('partials.contents')
  </div>
  
</main>
@endsection