@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CareTech</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

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
    
  </head>
  <body>
  
  <div class="site-loader"></div>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
              <a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span> <span class="d-none d-md-inline-block ml-2">+234 905 8744 473</span></a>
              <a href="#"><span class="text-black fl-bigmug-line-email64"></span> <span class="d-none d-md-inline-block ml-2">fasanyafemi@gmail.com</span></a>
            </p>  
          </div>
          <div class="col-6 col-md-6 text-right">
            <a href="#" class="mr-3"><span class="text-black icon-facebook"></span></a>
            <a href="#" class="mr-3"><span class="text-black icon-twitter"></span></a>
            <a href="#" class="mr-0"><span class="text-black icon-linkedin"></span></a>
          </div>
        </div>
      </div>
      
    </div>
    <div class="site-navbar">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="">
              <a href="" class="h5 text-uppercase text-black"><strong>CareTech Homes and Hostels<span class="text-danger">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="">Home</a>
                  </li>
                  <li><a href="">Hostels</a></li>
                  <li><a href="">About</a></li>
                  <li><a href="">Contact</a></li>
                </ul>
              </nav>
            </div>
           

          </div>
        </div>
      </div>
    </div>

    <div class="slide-one-item home-slider owl-carousel">
@foreach($slider as $slider)
      <div class="site-blocks-cover" style="background-image: url('{{asset('album')}}/{{$slider->image}}');" data-aos="fade" data-stellar-background-ratio="0.5">

        <div class="text">
          <h2>{{$slider->name}}</h2>
          <p class="location"><span class="property-icon icon-room"></span> {{$slider->category->name}}</p>
          <p class="mb-2"><strong>#{{$slider->price}}</strong></p>
          
          
          <p class="mb-0"><a href="{{route('view.album',[$slider->slug,$slider->id])}}" class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a></p>
          
        </div>
      </div>  
@endforeach
    </div>

    <div class="py-5">
      <div class="container">
      <form class="row mb-5" action='{{Route("filter")}}'>
          @csrf
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <select name="location" id="location" class="form-control d-block rounded-0" required>
                <option value="">Location</option>
                @foreach(App\Category::all() as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                 </select>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <select name="minprice" id="location" class="form-control d-block rounded-0" required>
                <option value="">Min Price</option>

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
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <select name="maxprice" id="location" class="form-control d-block rounded-0" required>
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
       <!--   <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="mb-4">
              <div id="slider-range" class="border-primary"></div>
              <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
            </div>
          </div>-->
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <input type="submit" class="btn btn-primary btn-block form-control-same-height rounded-0" value="Filter Hostel">
          </div>
          
        </form>
     <!--   <div class="row">
          <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
            <div class="feature d-flex align-items-start">
              <span class="icon mr-3 flaticon-house"></span>
              <div class="text">
                <h2 class="mt-0">Wide Range of Properties</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit rem sint debitis porro quae dolorum neque.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
            <div class="feature d-flex align-items-start">
              <span class="icon mr-3 flaticon-rent"></span>
              <div class="text">
                <h2 class="mt-0">Rent or Sale</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit rem sint debitis porro quae dolorum neque.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
            <div class="feature d-flex align-items-start">
              <span class="icon mr-3 flaticon-location"></span>
              <div class="text">
                <h2 class="mt-0">Property Location</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit rem sint debitis porro quae dolorum neque.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>-->
    <div class="site-section site-section-sm bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <div class="site-section-title">
              <h2>New Hostels for You</h2>
            </div>
          </div>
        </div>

      <div class="row mb-5">
      @foreach($albums as $album)
  <div class="col-md-6 col-lg-4 mb-4">

            <a href="" class="prop-entry d-block">
              <figure>
                <img src="{{asset('album')}}/{{$album->image}}" width='100%'style='height:250px' alt="Image" >
              </figure>
              <div class="prop-text">
                <div class="inner" style='border:1px solid black;background-color:grey'>
            

                  <p style='color:white;text-align:center'>Price:{{$album->price}}</p>
                  <h3 style='color:black;text-align:center'>{{$album->name}}</h3>
                  <p style='color:black;text-align:center'>Description:{{$album->description}}</p>
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
            </a>@endforeach
          </div>
          <!-- </div> -->
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="site-pagination">
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <span>...</span>
              <a href="#">10</a>
            </div>
          </div>  
        </div>
        
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center mb-5">
            <div class="site-section-title">
              <h2>Our Services</h2>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="#" class="service text-center border rounded">
              <span class="icon flaticon-house"></span>
              <h2 class="service-heading">Providing Accomodation</h2>
              <p><span class="read-more">We make accomodation very easy for students</span></p>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="#" class="service text-center border rounded">
              <span class="icon flaticon-sold"></span>
              <h2 class="service-heading">Advertising Hostel</h2>
              <p><span class="read-more">We create home where agents can showcase thier respective hostels</span></p>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="#" class="service text-center border rounded">
              <span class="icon flaticon-camera"></span>
              <h2 class="service-heading">Finding Roomate</h2>
              <p><span class="read-more">We provide a medium where student's can connect and find a roommate</span></p>
            </a>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <div class="site-section-title">
              <h2>Our Blog</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
            <a href="#"><img src="{{asset('homepage/images/img_4.jpg')}}" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
              <h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
            <a href="#"><img src="{{asset('homepage/images/img_2.jpg')}}" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
              <h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
            <a href="#"><img src="{{asset('homepage/images/img_3.jpg')}}" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
              <h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.</p>
            </div>
          </div>

        </div>

      </div>
    </div>

    
    <div class="site-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-7">
          <div class="site-section-title text-center">
            <h2>Our Agents</h2>
          </div>
        </div>
      </div>
      <div class="row block-13">

        <div class="nonloop-block-13 owl-carousel">
@foreach(App\user::all() as $agent)
          <div class="slide-item">
            <div class="team-member text-center">
              <img src="{{$agent->profilePic}}" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">{{$agent->name}}</h2>
                <span class="d-block mb-3 text-white-opacity-05">{{$agent->email}}</span>
                <p class="mb-5">Whatsapp icon </p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>
@endforeach
<!--          <div class="slide-item">
            <div class="team-member text-center">
              <img src="{{asset('homepage/images/person_2.jpg')}}" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. </p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>

          <div class="slide-item">
            <div class="team-member text-center">
              <img src="{{asset('homepage/images/person_3.jpg')}}" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. </p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>

          <div class="slide-item">
            <div class="team-member text-center">
              <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Megan Smith</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. </p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>

          <div class="slide-item">
            <div class="team-member text-center">
              <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. </p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>

          <div class="slide-item">
            <div class="team-member text-center">
              <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. </p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>

          <div class="slide-item">
            <div class="team-member text-center">
              <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Megan Smith</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. </p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>

          <div class="slide-item">
            <div class="team-member text-center">
              <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. </p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>

          <div class="slide-item">
            <div class="team-member text-center">
              <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. </p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>-->

        </div>

        </div>
      </div>
    </div>

    <div class="site-section site-section-sm bg-primary">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h2 class="text-white">Wide Range of Properties Just For You</h2>
            <p class="lead text-white-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
          <div class="col-md-4 text-center">
            <a href="#" class="btn btn-outline-primary btn-block py-3 btn-lg">See Properties</a>
          </div>
        </div>
      </div>
    </div>
    

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">About HomeSpace</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima minus odio!</p>
            </div>

            
            
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Buy</a></li>
                  <li><a href="#">Rent</a></li>
                  <li><a href="#">Properties</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Terms</a></li>
                </ul>
              </div>
            </div>


          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Follow Us</h3>

                <div>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>

            

          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;</script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>

  </div>

  <script src="{{asset('homepage/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('homepage/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('homepage/js/jquery-ui.js')}}"></script>
  <script src="{{asset('homepage/js/popper.min.js')}}"></script>
  <script src="{{asset('homepage/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('homepage/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('homepage/js/mediaelement-and-player.min.js')}}"></script>
  <script src="{{asset('homepage/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('homepage/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('homepage/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('homepage/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('homepage/js/aos.js')}}"></script>

  <script src="{{asset('homepage/js/main.js')}}"></script>
    
  </body>
</html>
@endsection