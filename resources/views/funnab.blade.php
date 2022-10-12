<!DOCTYPE HTML>
<html>
<head>
<title>CareTech</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cruise Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- fonts -->

<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<link href="//fonts.googleapis.com/css?family=Cinzel:400,700,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=oRaleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<!-- /fonts -->
<!-- css -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
<link href="{{asset('hostel/web/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> -->
<link href="{{asset('hostel/web/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('hostel/web/css/gallery.css" rel="stylesheet')}}" type="text/css" media="all" />
<link href="{{asset('hostel/web/css/jQuery.lightninBox.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('hostel/web/css/aos.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('hostel/web/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />

       <link rel="stylesheet" href="{{asset('userpage/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('userpage/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('userpage/css/style.css')}}" type="text/css">

      <link rel="stylesheet" href="{{asset('userpage/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('userpage/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('userpage/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('userpage/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('userpage/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('userpage/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('userpage/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('userpage/css/style.css')}}" type="text/css">

  
<!-- /css -->
<!-- js -->
<script src="{{asset('hostel/web/js/modernizr.min.js')}}"></script>
<!-- /js -->
</head>
<body>
<!-- topbar -->
<div class="topbar-w3ls">
	<div class="container">
		
		<div class="top-agileits">
			<div class="top-w3l1">
				<span class="fa fa-phone"></span>
				<p class="agile1" >+234 905 8744 473</p>
			</div>	
		
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Menu</button>
  <div id="myDropdown" class="dropdown-content">
  @if(Auth::check())
                      <a href="{{ url('/') }}">Home</a>
                      <a href="{{Route('user.album',[Auth::user()->id])}}">My Hostels</a>
                      <a href="{{Route('good',[Auth::user()->id])}}">My Dashboard</a>
					  @endif
					  @guest
                            <li class="nav-item" style='font-family:georgia'>
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item" style='font-family:georgia'>
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @endguest


  </div>
</div>	
			<div class="top-w3l2">
                </div>
            </div>
        </nav>
    </div>

			</div>
		</div>
	</div>	
</div>
<!-- /topbar -->
<!-- navigation -->
<div class="navbar-wrapper">
    <div class="container">
		<nav class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">CareTech</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				
				
			</div>
        </nav>
	</div>
</div>
<!-- /navigation -->
<!-- banner -->
<section class="banner-w3ls" >
 <!-- https://hostel.thecaretech.org/hostel/web/video/cruise.mp4
https://hostel.thecaretech.org/hostel/web/images/alternative.jpeg-->
	<div id="block" data-vide-bg="https://hostel.thecaretech.org/hostel/web/video/alternative2.jpeg" height='5000px' style='height:5000px;width:100%' data-vide-options="position: 0% 50%">
			<div class="overlay">
              <h2>Funnab<span style='color:white'> Hostels</span><br>
              
              <span style="font-size:40%;color:white">Powered by <a style="color:white;text-shadow:1px 1px 1px #FF00FF" href="https://thecaretech.org"><b>Caretech</b></a></span>
</h2>	
			</div>
		</div>	
</section>
<!-- /banner -->
<!-- about -->
<!-- <section class="about-wthree" id="about">
	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-12" data-aos="flip-right">
		<ul class="grid cs-style-1">
				<li>
					<figure>
						<img src="{{asset('hostel/web/images/about-img2.jpg')}}" alt="img01" class="img-responsive">
						<figcaption>
							<a href="{{asset('hostel/web/images/about-img.jpg')}}" class="lightninBox" data-lb-group="1">View More</a>
						</figcaption>
					</figure>
				</li>
			</ul>
	</div>
		<div class="col-lg-6 col-md-6 col-sm-12" data-aos="flip-left">
			<ul class="grid cs-style-1">
				<li>
					<figure>
						<img src="{{asset('hostel/web/images/about-img2.jpg')}}" alt="img01" class="img-responsive">
						<figcaption>
							<a href="{{asset('hostel/web/images/about-img.jpg')}}" class="lightninBox" data-lb-group="1">View More</a>
						</figcaption>
					</figure>
				</li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</section> -->
<!-- /about -->
<!-- divider -->
<!--
<section class="service-agileinfo" id="service">
	<div class="container">
		<h3 class="text-center" data-aos="zoom-in">Our Services</h3>
		<div class="col-lg-3 col-md-3 col-sm-6" data-aos="flip-down">
			<img src="{{asset('hostel/web/images/ship.png')}}" alt="" class="img-responsive">
			<h4 class="text-center">Accomodation</h4>
			<p class="text-center">We provide the best hostel accomodation service at a very cheap rate.</p>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6" data-aos="flip-down">
			<img src="{{asset('hostel/web/images/captain.png')}}" alt="" class="img-responsive">
			<h4 class="text-center">Hostel Advertisement</h4>
			<p class="text-center">We give room for agents to showcase their respective hostels for annual rentage services</p>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6" data-aos="flip-down">
			<img src="{{asset('hostel/web/images/anchor.png')}}" alt="" class="img-responsive">
			<h4 class="text-center">Getting Roomate</h4>
			<p class="text-center">We provide a platform where students can get roomate based on their choices of department,gender, and religion</p>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6" data-aos="flip-down">
			<img src="{{asset('hostel/web/images/baggage.png')}}" alt="" class="img-responsive">
			<h4 class="text-center">Filter hostels to your own choice</h4>
			<p class="text-center">We do not want you to miss out on cheap offers for your preferred location, that is why you always have the option to filer hostels</p>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
-->
<section class="divider-wthree" >
	<div class="container">
		<h3 class="text-center" style='color:black' data-aos="zoom-in">Filter hostel<br>
				<a href='{{Route("allhostel")}}' style='text-align:center'><button class='btn btn-primary'>All Hostels</button></a>
		</h3>
		<div class="py-5">
      <div class="container">
      <form class="row mb-5" action='{{Route("filter")}}'>
          @csrf
          <div class="col-sm-2 col-md-2 col-lg-2 mb-2" >
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <!-- <select name="location" id="location" class="form-control d-block rounded-0" required> -->
				  <h4 class="text-center" data-aos="zoom-in" style='color:black;text-align:left'><strong>Location</strong></h4><br>
			  
			  @error('location')
			  <span style='color:red'><strong>{{$message}}<br></strong></span>
	          @enderror
			  @foreach(App\Category::all() as $category)
              
                 <input type="checkbox" name="location[]" value="{{$category->id}}"> <label style='color:black' >{{$category->name}}</label><br>
              
			  @endforeach
			  
				<!-- <option value="">Location</option>
                @foreach(App\Category::all() as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach -->
			</select>
            </div>
          </div>
          <div class="col-sm-8 col-md-4 col-lg-3 mb-4" style="font-family:'Cinzel', serif">
			  <!-- <div class="select-wrap"> -->
              <span class="icon icon-arrow_drop_down"></span>
             <select style='font-family:"Cinzel" serif;' name="minprice" id="location" class="form-control" required>
                <option  value=""><span style='font-family:"Cinzel" serif'>Minimum Price</span></option>
				
                <option  value="10000"><span style='font-family:"Cinzel" serif'>#10,000</span></option>
                <option  value="20000"><span style='font-family:"Cinzel" serif'>#20,000</span></option>
                <option  value="30000"><span style='font-family:"Cinzel" serif'>#30,000</span></option>
                <option  value="40000"><span style='font-family:"Cinzel" serif'>#40,000</span></option>
                <option value="50000"><span style='font-family:"Cinzel" serif'>#50,000</span></option>
                <option  value="60000"><span style='font-family:"Cinzel" serif'>#60,000</span></option>
                <option value="70000"><span style='font-family:"Cinzel" serif'>#70,000</span></option>
                <option  value="80000"><span style='font-family:"Cinzel" serif'>#80,000</span></option>
                <option value="90000"><span style='font-family:"Cinzel" serif'>#90,000</span></option>
                <option value="100000"><span style='font-family:"Cinzel" serif'>#100,000</span></option>
                <option value="200000"><span style='font-family:"Cinzel" serif'>#200,000</span></option>
                <option value="300000"><span style='font-family:"Cinzel" serif'>#300,000</span></option>
                <option value="500000"><span style='font-family:"Cinzel" serif'>#500,000</span></option>
			</select>

		</div>
          <!-- </div> -->
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4" style="font-family:'Cinzel', serif">
            <div class="select-wrap" style="font-family:'Cinzel', serif">
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
	</div></div>
	</div>
</section>
<!-- /divider -->
<!-- services -->
<!-- /services -->
<!-- gallery -->
<!-- <section class="gallery-info" id="gallery">
	<div class="container">
		<h3 class="text-center" data-aos="zoom-in">New Hostels</h3>
		<ul class="clearfix demo">
			
			@foreach($albums as $album)
			
			<li data-aos="flip-down"><img src="{{asset('album')}}/{{$album->image}}" alt="" class="img-responsive"/>
            <div style='background-color:white;margin-top:0px;border:1px solid black;padding:0px 0px 5px 0px'>
                  <p style='color:white;text-align:center'>Price:{{$album->price}}</p>
                  <h3 style='color:black;text-align:center'>{{$album->name}}</h3>
                  <p style='color:black;text-align:center'>Description:{{$album->description}}</p>
                  <p style='color:black;text-align:center'>Location:{{$album->category->name}}</p>
				  
                <div class="prop-more-info">
                  <div class="inner d-flex">
					  <div class="col">
                  <center>
					  <a href="{{route('view.album',[$album->slug,$album->id])}}" class="btn btn-primary">View Hostel</a>
        </center></div> </div></div></div></li>
                  
		@endforeach</ul>
    </div>
</section> -->

<section class="categories">
	<div class="container">
		<br><h3 style="text-align:center;font-family:'Cinzel', serif" data-aos="zoom-in">New Hostels<br></h3>
		<div class="row">
			<div class="categories__slider owl-carousel">
				@foreach($albums as $album)
                   
                    <div class="col-lg-3">
          <div class="card mb-4 shadow-sm">
            <img src="https://hostel.thecaretech.org/public/hostelimage/{{$album->image}}" height="200" style="width:500px;height:200px;border-radius:0px 0px 0px 0px ">
            <div class="card-body" style='text-align:center'>
                <h3><b>{{$album->name}}</b></h3>
				<p class="card-text">#<span style='font-size:20px;font-size:bold;color:red'>{{$album->price}}</span></p>
              <p style='text-align:center' class="card-text">
                 Location:<span style='color:#3490dc'> {{ $album->category->name }}</span>
              </p>
                 <a href="{{route('view.album',[$album->slug,$album->id])}}"> <button type="button" class="btn btn-bg btn-primary">View Hostel</button>
                 </a>
                 <!-- <a href=""> <button type="button" class="btn btn-sm btn-outline-primary">Add to cart</button></a> -->
                </div>
          </div>
        </div>
                    @endforeach
                </div>
            </div>
        </div>
		
	</section>
   
<!-- /gallery -->
<!-- team -->
<!--
<section class="team-w3" id="team">
	<section class="categories">
	<div class="container">
		<h3 class="text-center">More Hostels</h3>
	<div class="row">
			<div class="categories__slider owl-carousel">

		@foreach($albums2 as $agent)
		<div class="col-lg-3 col-md-3 col-sm-6 team-w3l1" data-aos="flip-right">
          <center> <img src="https://hostel.thecaretech.org/public/hostelimage/{{$agent->image}}" style="width:50%;height:120px;border-radius:20px" alt="" class="img-responsive"></center>
			<h4 style='padding-bottom:0px'>{{$agent->name}}</h4>
          <p style='text-align:center' class="card-text">
                 Location:<span style='color:#3490dc'> {{ $agent->category->name }}</span>
              </p>
		<!--	<h4>{{$agent->phone}}</h4>
			<ul class="social-icons1" >
              <li> <a href="{{route('view.album',[$agent->slug,$agent->id])}}"> <button type="button" class="btn btn-bg btn-primary">View Hostel</button></a></li>

				<!--<li ><a href="https://wa.me/234{{substr($agent->phone,1)}}"><i class="fa fa-whatsapp"></i></a></li>
				 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>
            
		@endforeach
</div></div>
	<!--	<div class="col-lg-3 col-md-3 col-sm-6 team-w3l1" data-aos="flip-left">
			<img src="{{asset('hostel/web/images/team-img2.jpg')}}" alt="" class="img-responsive">
			<h4>Elizabeth</h4>
			<ul class="social-icons1">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 team-w3l2" data-aos="flip-right">
			<img src="{{asset('hostel/web/images/team-img3.jpg')}}" alt="img06" class="img-responsive">
			<h4>Max Payne</h4>
			<ul class="social-icons1">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 team-w3l2" data-aos="flip-left">
			<img src="{{asset('hostel/web/images/team-img4.jpg')}}" alt="img06" class="img-responsive">
			<h4>Diana</h4>
			<ul class="social-icons1">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>-->
		<div class="clearfix"></div>	
	</div>
</section><br>
<!-- /team -->
<!-- map -->
   
<!-- /map -->
<!-- contact -->
<!--
<section class="contact-w3-agileits" id="contact">
	<div class="container">
		<h3 class="text-center" data-aos="zoom-in">Get In Touch</h3>
		<div class="col-lg-4 col-md-4 contact-w3l1" data-aos="flip-right">
			<h4>Subscribe to our newsletter</h4>
			<div class="subscribe">
				<form action="#" method="post">
					<div class="form-group1">
						<input class="form-control" id="email1" name="email1" placeholder="Enter Your Email Address" type="email" required>
					</div>
					<div class="form-group2">
						<button style='background-color:#3490dc' class="btn btn-outline btn-lg" type="submit">Subscribe</button>
					</div>
					<div class="clearfix"></div>
				</form>
			</div>	
		</div>
		<div class="col-lg-8 col-md-8 contact-w3l2" data-aos="flip-left"  >
			<form method="post" action='{{Route("contact")}}'>@csrf
				<div class="form-group col-md-4 col-sm-4">
					<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required/>
				</div>
				<div class="form-group col-md-4 col-sm-4">
					<input type="email" class="form-control" id="email2" name="email" placeholder="Your Email" required/>
				</div>
				<div class="form-group col-md-4 col-sm-4">
					<input type="tel" class="form-control" id="phone" name="phone" placeholder="Your Phone" required/>
				</div>
				<div class="clearfix"></div>
				<div class="form-group col-md-12">
					<textarea class="form-control" rows="6" name="message" placeholder="Your Message" required></textarea>
				</div>
				<div class="form-group col-md-12">
					<button style='background-color:#3490dc;outline-color:#3490dc;border-color:#3490dc' type="submit" class="btn-outline2"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Submit</button>
				</div>
				<div class="clearfix"></div>
			</form>	
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<!-- /contact -->
<!-- footer -->
<section class="footer-w3-agileits">
	<div class="container">
		<div class="col-lg-8 col-md-8">
			<ul class="w3-agile">
				<li><a href="#" class="page-scroll">Home</a></li>
				<li><a href="#service" class="page-scroll">Services</a></li>
				<li><a href="#contact" class="page-scroll">Contact</a></li>
			</ul>
		</div>
      
      
		<div class="col-lg-4 col-md-4">
			<ul class="social-icons2">
				<li><a href="https://www.facebook.com/Femsdot"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/PelumiFasanya"><i class="fa fa-twitter"></i></a></li>
				<li><a href="https://wa.me/2349058744473"><i class="fa fa-whatsapp"></i></a></li>
				<li><a href="https://www.about.me/fasanya"><i class="fa fa-google-plus"></i></a></li>
			</ul>	
		</div>
		<div class="clearfix"></div>
		<p class="text-center">&copy; Powered by <a href="https://thecaretech.org"> CareTech </a></p>
	</div>
	<a href="#0" class="cd-top">Top</a>
</section>
<!-- /footer -->
<!-- back to top -->
<!-- /back to top -->
<!-- js files -->
<!-- js files -->
<script src="{{asset('hostel/web/js/jquery.min.js')}}"></script>
<script src="{{asset('hostel/web/js/bootstrap.min.js')}}"></script>
<script src="{{asset('hostel/web/js/smoothscroll.js')}}"></script>
<script src="{{asset('hostel/web/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('hostel/web/js/grayscale.js')}}"></script>
<script src="{{asset('hostel/web/js/aos.js')}}"></script>
<script src="{{asset('hostel/web/js/index.js')}}"></script>
<!-- js for back to top -->
<script src="{{asset('hostel/web/js/top.js')}}"></script>
<!-- /js for back to top -->
<!-- js for about lightbox -->
<script src="{{asset('hostel/web/js/jQuery.lightninBox.js')}}"></script>
<script type="text/javascript">
	$(".lightninBox").lightninBox();
</script>
<!-- /js for about lightbox -->
<!-- js for gallery -->
<script src="{{asset('hostel/web/js/jquery.picEyes.js')}}"></script>
<script>
$(function(){
	//picturesEyes($('li'));
	$('ul.demo li').picEyes();
});
</script>
<!-- /js for gallery -->
<!-- js for banner -->
<script src="{{asset('hostel/web/js/jquery.vide.js')}}"></script>
<!-- /js for banner -->
<!-- /js files -->
    <script src="{{asset('userpage/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('userpage/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('userpage/js/main.js')}}"></script>
 
  <script src="{{asset('userpage/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('userpage/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('userpage/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('userpage/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('userpage/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('userpage/js/mixitup.min.js')}}"></script>
    <script src="{{asset('userpage/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('userpage/js/main.js')}}"></script>
 
  <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
  
	<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body>
</html>