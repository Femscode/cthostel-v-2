@extends('layouts.app')
<link rel="stylesheet" href="{{asset('homepage/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('homepage/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('homepage/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('homepage/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('homepage/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('homepage/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('homepage/css/mediaelementplayer.css')}}">
    <link rel="stylesheet" href="{{asset('homepage/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('homepage/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('homepage/css/fl-bigmug-line.css')}}">
    
  
    <link rel="stylesheet" href="{{asset('homepage/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('homepage/css/style.css')}}">

@section('content')
<!--<div class="container">

    <!-- <img src="/banner/catbanner-phography.jpg" style="width: 100%;height: 400px;">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/banner/banner.jpg" style='height:200px' class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    
      <img src="/banner/banner.jpg" style='height:200px' class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Affordable Hostels</h1>
              </div>
    </div>
    <div class="carousel-item">
      <img src="/banner/banner.jpg" style='height:200px' class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>With maximum comfortablility</h1>
              </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
-->
<div class="py-5">
      <div class="container">
      
<h4 style="text-align:center;font-family:'Cinzel',serif">Hostels Available Based on your filter</h4>
    <div class="row">
@if(count($filtered) > 0)
      @foreach($filtered as $album)

        <div class="col-lg-3">
            <div class="card mt-4" style="min-height: 230px;">
            <img src="https://hostel.thecaretech.org/public/hostelimage/{{$album->image}}" style='height:200px' class="card-img-top img-thumbnail"style="min-height: 180px;">

            <div class="card-body">
                <h5 class="card-title"><center>{{$album->name}}</center></h5>
                <h5 class="card-title" style='color:red'><center>#{{$album->price}}</center></h5>
                <h5 class="card-title"><center>{{$album->category->name}}</center></h5>
                <center>
                    <a href="{{route('view.album',[$album->slug,$album->id])}}" class="btn btn-primary">View Hostel</a>
                </center>
            </div>
        </div>

    </div>
      @endforeach
      @else 
      <p style='color:red;text-align:center'>
        Sorrry, there is no hostel that falls in the category of your filter yet.<br>
        
      </p>
      @endif

    </div>
<br><br>
      <form class="row mb-5" action='{{Route("filter")}}' id='filter'>
          @csrf
          <div class="col-sm-2 col-md-2 col-lg-2 mb-2" >
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <!-- <select name="location" id="location" class="form-control d-block rounded-0" required> -->
				  <!-- <h4 class="text-center" data-aos="zoom-in" style='color:black;text-align:left'><strong style='color:black'>Location</strong></h4><br> -->
			  
			  @error('location')
			  <span style='color:red'><strong>{{$message}}<br></strong></span>
	          @enderror
			  @foreach(App\Category::all() as $category)
			  <input type="checkbox" name="location[]" value="{{$category->id}}"> <label style='color:black'>{{$category->name}}</label><br>
			  @endforeach
			  
				<!-- <option value="">Location</option>
                @foreach(App\Category::all() as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach -->
			</select>
            </div>
          </div>
          <div class="col-sm-8 col-md-4 col-lg-3 mb-4">
			  <!-- <div class="select-wrap"> -->
              <span class="icon icon-arrow_drop_down"></span>
              <select name="minprice" id="location" class="form-control" required>
                <option value="">Minimum Price</option>
				
                <option value="10000">#10,000</option>
                <option value="20000">#20,000</option>
                <option value="30000">#30,000</option>
                <option value="40000">#40,000</option>
                <option value="50000">#50,000</option>
                <option value="60000">#60,000</option>
                <option value="70000">#70,000</option>
                <option value="80000">#80,000</option>
                <option value="90000">#90,000</option>
                <option value="100000">#100,000</option>
                <option value="200000">#200,000</option>
                <option value="300000">#300,000</option>
                <option value="500000">#500,000</option>
			</select>
		</div>
          <!-- </div> -->
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="select-wrap">
				<span class="icon icon-arrow_drop_down"></span>
              <select name="maxprice" id="location" class="form-control" required>
              <option value="">Max Price</option>
			  <option value="20000">#20,000</option>
                <option value="30000">#30,000</option>
                <option value="40000">#40,000</option>
                <option value="50000">#50,000</option>
                <option value="60000">#60,000</option>
                <option value="70000">#70,000</option>
                <option value="80000">#80,000</option>
                <option value="90000">#90,000</option>
                <option value="100000">#100,000</option>
                <option value="200000">#200,000</option>
                <option value="300000">#300,000</option>
                <option value="500000">#500,000</option>
                </select>
            </div>
          </div>
		  <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
			  <input type="submit" class="btn btn-primary btn-block form-control-same-height rounded-0" value="Filter Hostel">
          </div>
          
        </form>
</div>
@endsection
