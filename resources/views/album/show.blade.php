@extends('layouts.app')
@section('content')
 <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js" integrity="sha256-SOuLUArmo4YXtXONKz+uxIGSKneCJG4x0nVcA0pFzV0=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- photo swipe -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/photoswipe.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/default-skin/default-skin.min.css">
<!-- photoswipe -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/photoswipe.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/photoswipe-ui-default.min.js" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/npm/photoswipe-simplify@0.0.3/dist/js/photoswipe-simplify.min.js" charset="utf-8"></script>

  <!--  <link rel="stylesheet" href="{{asset('userpage/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('userpage/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('userpage/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('userpage/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('userpage/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('userpage/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('userpage/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('userpage/css/style.css')}}" type="text/css">-->

<div class="row">
       
<div class="container" style='text-align:center'>
<div class="card" style='text-align:center'>
    <div class="card-body" style='text-align:center'>
        <div class='row' style='text-align:center'>
         @foreach($albums as $album)
         <p style='text-align:center'>
</div>
 <h2>{{$album->name}}</h2>
      <p><span style='color:red'>Description:</span><br>{{$album->description}}</p>
      <p><span style='color:red'>Location:</span><br>{{$album->category->name}}</p>
      
      
     

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
     <div class="carousel-item active">
      <img style='height: 300px; width: 700px;border-radius:5px;border: 1px solid #1bb1dc; margin: 20px auto;' src="https://hostel.thecaretech.org/public/hostelimage/{{$album->image}}" 
           class="d-block w-100" alt="...">
    </div>
    @foreach($album->albumimages as $img)
<div class="carousel-item">
    <img style='height: 300px; width: 700px;border-radius:5px;border: 1px solid #1bb1dc; margin: 20px auto;' src='https://hostel.thecaretech.org/public/images/{{$img->image}}' class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block"> </div>
    </div>
@endforeach
  
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" style='color:#fff' aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" style='color:#fff' aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

      <!--  <div class="carousel-item active">
      <img src="/banner/banner.jpg" style='height:200px' class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img src="/banner/banner.jpg" style='height:200px' class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block"> </div>
    </div>
    <div class="carousel-item">
      <img src="/banner/banner.jpg" style='height:200px' class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block"></div>
    </div>-->
    
      <!--
@foreach($album->albumimages as $img)
<img style="width:300px;height:200px" class="myAjaxLoadedImage" src="https://hostel.thecaretech.org/public/images/{{$img->image}}"
data-img-src="https://hostel.thecaretech.org/public/images/{{$img->image}}" data-img-width="800" data-img-height="600">

@endforeach-->
           <br><br> <h2 style='text-align:center'> Agent in Charge:<a href="{{route('user.album',[$album->user_id])}}" style='text-align:center;color:#3490dc;font-size:20px'>
      {{$album->user->name}}</a></h2>
            
    
        
        
           
               <h2 style='color:red'>Price: #{{$album->price}}</h2>
           
           <a href="tel:{{$album->user->phone}}"><button class='fa fa-phone btn btn-info btn btn-lg'>Call agent</button></a>
           <a href='https://wa.me/234{{substr($album->user->phone,1)}}?text=Hi%2C%20my%20name%20is%20%28Input%20your%20name%29.%20I%20am%20interested%20in%20an%20hostel%20of%20yours%20%28Input%20name%20of%20hostel%29%20%20from%20caretech.
           '>
			 <button class='fa fa-whatsapp btn btn-success btn btn-lg'>Message</button></a>
           <a href='{{route("hostelrequest",[$album->id])}}'><button class='fa fa-nghh btn btn-primary btn btn-lg'>Request for roomate</button></a>
         @endforeach
    </div>
    
</div></div></div></div></div></div>
 @if(count($roommate) !== 0)
 <div class="container">
 <div class='card'>	
 	

   
           <br> <h3 style='text-align:center'>Students in need of room mate</h3>
   
   
   
   <!--
 <section class="categories">
        <div class="container">
            <div class="row">
              
                        
                    
                
                <div class="categories__slider owl-carousel">
                    @foreach($roommate as $product)
                   
                    <div class="col-lg-3">
         <div class="card mb-4 shadow-sm">
            <img src="https://hostel.thecaretech.org/public/roommate/{{$product->image}}" height="200" style="width: 100%">
            <div class="card-body">
                <p><b>{{$product->name}}</b></p>
              <p class='card-text'>
                Product Created By {{$product->department}}
              </p>
              <!--<p class="card-text">
                  {!! (Str::limit($product->description,20)) !!}
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <a href=""> <button type="button" class="btn btn-sm btn-outline-success">View</button>
                 </a>
                    </div>
                <small class="text-muted">{{$product->phone}}</small>
              </div>
            </div>
          </div>
        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section><br><br>
     
   
   
   -->
   
            <div class="row">
                @foreach($roommate as $roommate)
                <!-- <div class="col-lg-3 col-md-4 col-6"> -->
                <div class="col-lg-3">
            <div class="card">

                   <br><center> <img src="https://hostel.thecaretech.org/public/roommate/{{$roommate->image}}" style='height:180px;width:200px;border-radius:20%;'class="img-thumbnail">
                  </center>  <div class="card-body">
                <h5 class="card-title"><center>Name:<span style='color:#3490dc;font-family:georgia;'> {{$roommate->name}}</span></center></h5>
                <h5 class="card-title"><center>Gender:<span style='color:#3490dc;font-family:georgia;'> {{$roommate->gender}}</span></center></h5>
                <h5 class="card-title"><center>Department:<span style='color:#3490dc;font-family:georgia;'> {{$roommate->department}}</span></center></h5>
                <h5 class="card-title"><center>Level:<span style='color:#3490dc;font-family:georgia;'> {{$roommate->level}}</span></center></h5>
                <h5 class="card-title"><center>Religion:<span style='color:#3490dc;font-family:georgia;'> {{$roommate->religion}}</span></center></h5>
                <!-- <h5 class="card-title"><center>Name{{$roommate->name}}</center></h5> -->
                <!-- <p>{{$roommate->gender}}</p><p>{{$roommate->religion}}</p> -->
			     <center>
                   <a href="tel:{{$roommate->phone}}"><button class='fa fa-phone btn btn-info btn btn-lg'>
                  Call 
                  </button></a>
				<a href="https://wa.me/234{{substr($roommate->phone,1)}}"><button class='btn btn-success fa fa-whatsapp btn btn-lg'>
                  Message
                  </button></a>
                </center>

            </div>
        </div>

    </div>      
                @endforeach
       <!--       
              <p style='color:red;text-align:center'>
                No roommate request yet for this hostel
              </p>
              -->

            <!-- </div> -->

        <!-- </div> -->

    </div>

@endif
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url ='{{Request::fullUrl()}}' ;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://laravelphotoshareapp.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
  <!-- <script src="{{asset('userpage/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('userpage/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('userpage/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('userpage/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('userpage/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('userpage/js/mixitup.min.js')}}"></script>
    <script src="{{asset('userpage/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('userpage/js/main.js')}}"></script>-->
 
  
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
    <!--end-->

</div>

    
</div>
@endsection