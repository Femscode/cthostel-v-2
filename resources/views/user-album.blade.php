@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
<div class='card'>
     @foreach($user2 as $agent)
<br><center><img src="https://hostel.thecaretech.org/public/agent/{{$agent->profilePic}}" style="border-color:red;border:1px solid red;width: 230px;height:200px;border-radius:10%"></center>
 @endforeach
<div style='text-align:center'>
        
        @foreach($user2 as $agent)
              <br> <h4 style='font-family:georgia'>Name: <span style='font-style:italic;color:red'>{{$agent->name}}</span></h4>
               <h4 style='font-family:time news roman'><span style='font-style:italic;color:grey'>{{$agent->email}}</span></h4>
                 <h4 style='font-family:georgia'><span style='font-style:italic;color:grey'>{{$agent->phone}}</span></h4>

			<!--	<a href="https://wa.me/234{{substr($agent->phone,1)}}"><button class='btn btn-success'>-->
                  <a href="https://wa.me/234{{substr($agent->phone,1)}}?text=Hi%2C%20my%20name%20is%20%28Input%20your%20name%29.%20I%20am%20interested%20in%20an%20hostel%20of%20yours%20%28Input%20name%20of%20hostel%29%20%20from%20caretech."><button class='btn btn-success'>
                  Message Agent
                  </button><br></a>
               @endforeach
            
         
</div>
</div>
<div class='card'>
    <div class="row">
    <div class="container" style='text-align:center'>


@foreach($user2 as $agent)
        <br><h3 style='font-family:"Cinzel", serif'>Hostels by {{$agent->name}}</h3><br>
        @endforeach
       
</div>
        @foreach($albums as $album)

        <div class="col-lg-3">
         <!--   <div class="card">-->
          <center>  <img src="https://hostel.thecaretech.org/public/hostelimage/{{$album->image}}" style='height:200px;width:250px' class="card-img-top">
</center>
            <div class="card-body">
                <h5 class="card-title"><center>{{$album->name}}</center></h5>
                <h5 class="card-title" style='color:red'><center>#{{$album->price}}</center></h5>
                <h5 class="card-title"><center>{{$album->category->name}}</center></h5>
                <center>
                    <a href="{{route('view.album',[$album->slug,$album->id])}}" class="btn btn-primary">View Hostel</a>
                </center>
            </div>
        </div>

    <!--</div>-->
    
        @endforeach

    </div>

        <br>
        <br>


</div>
@endsection
