@extends('layout.staffHomepage')            

<!-- Content -->
@section('Content')  
    <div class="w3-center w3-padding-64">
        <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Photo Gallery</span>
    </div>
    <!-- Slideshow --> <br><br>
    <div class="slideshow-container">
      @foreach($photos as $s)
        <div class="mySlides fade">
          <img src="{{$s->pic}}" style="width:100%;height:540px;"><br><br><br>
          <div class="text">{{$s->title}}</div>
        </div> 
      @endforeach
    </div>
    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>

<br><br>
@endsection

@section('title')
Staff Home Page
@endsection
