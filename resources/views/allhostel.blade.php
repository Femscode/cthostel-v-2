@extends('layouts.app')

@section('content')

 <div class="container">
 	<form action="{{route('allhostel',[$id])}}" method="GET">
 		<div class="form-row">
 			<div class="col-md-8">
 				<input type="text" name="search" class="form-control" placeholder="search...">
 			</div>
 			<div class="col">
 				<button type="submit" class="btn btn-secondary">Search</button>
 			</div>
 		</div>

 	</form>
 	<br>


 	     <div class="row">
      
      @foreach($products as $album)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="https://hostel.thecaretech.org/public/hostelimage/{{$album->image}}" height="200" style="width: 100%">
            <div class="card-body">
           
            <p style='color:red;text-align:center'>#{{$album->price}}</p>
                  <h3 style='color:black;text-align:center'>{{$album->name}}</h3>
                  <p style='color:black;text-align:center'>Location:{{$album->category->name}}</p>
                
                <div class="prop-more-info">
                  <div class="inner d-flex">
                  <div class="col">
                  <center>
            <a href="{{route('view.album',[$album->slug,$album->id])}}" class="btn btn-primary">View Hostel</a>
        </center> </div></div></div>

            </div>
          </div>
        </div>
        @endforeach
      </div>
      {{$products->links()}}

 </div>
 @endsection