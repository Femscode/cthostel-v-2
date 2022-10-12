<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CareTech</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body style="background-image: url('/myimages/CTH-bg.jpg')">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                  <img src="/myimages/logo_header.png"
                  srcset="/myimages/logo_header.png"
                  width="200" height="40px" alt="CTHostel" title="Journal 3 Demo 5" />
                    <span style='font-size:15px;color:red'>    </span></h3>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        @if(Auth::check())
                      <li class="nav-item">  <a class="nav-link" href="{{ url('/') }}">Home</a></li>
                      <li class="nav-item">  <a class="nav-link" href="{{Route('user.album',[Auth::user()->id])}}">My Hostels</a></li>
                      <li class="nav-item">  <a class="nav-link" href="{{Route('good',[Auth::user()->id])}}">My Dashboard</a></li>
                      @endif



                       <!-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <span class="caret" style='font-family:georgia'> My Album </span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    
                                </div>
                            </li>-->
                       
                        <!-- Authentication Links -->
                        <a href="" class="nav-link">
                            
                        </a>
                       
                        @guest
                      <li class="nav-item">  <a class="nav-link" href="{{ url('/') }}">Home</a></li>
                            <li class="nav-item" style='font-family:georgia'>
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item" style='font-family:georgia'>
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else



                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<style>#intro {
  display: table;
  width: 100%;
  height: 100vh;
  background: #000;
}

#intro .carousel-item {
  width: 100%;
  height: 100vh;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

#intro .carousel-item::before {
  content: '';
  background-color: rgba(0, 0, 0, 0.7);
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
}

.carousel-container {
    text-align:center;
    color:white;
    font-family:georgia;
    font-size:50px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  position: absolute;
  /* bottom: 0; */
  top: 10;
  left: 20;
  /* right: 0; */
}

#intro .carousel-background img {
  max-width: 100%;
}

#intro .carousel-content {
  text-align: center;
}

#intro h2 {
  color: #fff;
  margin-bottom: 30px;
  font-size: 48px;
  font-weight: 700;
}

#intro p {
  width: 80%;
  margin: 0 auto 30px auto;
  color: #fff;
}

#intro .carousel-fade {
  overflow: hidden;
}

#intro .carousel-fade .carousel-inner .carousel-item {
  transition-property: opacity;
}

#intro .carousel-fade .carousel-inner .carousel-item,
#intro .carousel-fade .carousel-inner .active.carousel-item-left,
#intro .carousel-fade .carousel-inner .active.carousel-item-right {
  opacity: 0;
}

#intro .carousel-fade .carousel-inner .active,
#intro .carousel-fade .carousel-inner .carousel-item-next.carousel-item-left,
#intro .carousel-fade .carousel-inner .carousel-item-prev.carousel-item-right {
  opacity: 1;
  transition: 0.5s;
}

#intro .carousel-fade .carousel-inner .carousel-item-next,
#intro .carousel-fade .carousel-inner .carousel-item-prev,
#intro .carousel-fade .carousel-inner .active.carousel-item-left,
#intro .carousel-fade .carousel-inner .active.carousel-item-right {
  left: 0;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}

#intro .carousel-control-prev,
#intro .carousel-control-next {
  width: 10%;
}

#intro .carousel-control-next-icon,
#intro .carousel-control-prev-icon {
  background: none;
  font-size: 32px;
  line-height: 1;
}

#intro .carousel-indicators li {
  cursor: pointer;
}

#intro .btn-get-started {
  font-family: "Montserrat", sans-serif;
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 8px 32px;
  border-radius: 50px;
  transition: 0.5s;
  margin: 10px;
  color: #fff;
  background: #18d26e;
}

#intro .btn-get-started:hover {
  background: #fff;
  color: #18d26e;
}

    </style>
    <script>
        const app = new Vue({
            el:'#app'
        });
        </script>
</html>
