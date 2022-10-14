<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>CTH - Service Registration </title>
    <link href="myimages/fav.png" src='myimages/fav.png' rel="icon" />

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css') }}">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-extend.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/css/master_style.css') }}">

    <!-- Superieur Admin skins -->
    <link rel="stylesheet" href="{{ asset('assets/css/skins/_all-skins.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

</head>

<body class="hold-transition bg-img" style="background-image: url('/myimages/CTH-bg.jpg')" data-overlay="4">

    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">
            <div class="col-12">
                <div class="row no-gutters justify-content-md-center">
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="content-top-agile h-p100 skin-blue">
                            <img src='{{ asset(' myimages/logo_header.png') }}'
                                style='height:50px; height:50px; margin:20px;background:#fff; border-radius:5px;padding:4px'
                                href='{{ asset(' myimages/logo_header.png') }}' />
                            <p class="text-white">Service Registration</p>

                            <div class="text-center text-white">
                                <p class="mt-20">- Sign With -</p>
                                <p class="gap-items-2 mb-20">
                                    <a class="btn btn-social-icon btn-outline btn-white" href="#"><i
                                            class="fa fa-facebook"></i></a>
                                    <a class="btn btn-social-icon btn-outline btn-white" href="#"><i
                                            class="fa fa-twitter"></i></a>
                                    <a class="btn btn-social-icon btn-outline btn-white" href="#"><i
                                            class="fa fa-google-plus"></i></a>
                                    <a class="btn btn-social-icon btn-outline btn-white" href="#"><i
                                            class="fa fa-instagram"></i></a>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="p-40 bg-white content-bottom h-p100">


                            <form class="form-horizontal" method="POST" action="{{ route('saveservice') }}">
                                @csrf

                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info border-info"><i
                                                    class="ti-user"></i></span>
                                        </div>
                                        <input type="text" name="name" id="name" class="form-control pl-15"
                                            placeholder="Username ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info border-info"><i
                                                    class="ti-email"></i></span>
                                        </div>
                                        <input type="text" name="email" id="email" class="form-control pl-15"
                                            placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info border-info"><i
                                                    class="ti-user"></i></span>

                                        </div>
                                        <input id="phone" min='11' placeholder='Phone number' required type="number"
                                            class="form-control pl-15" name="phone">

                                    </div>
                                </div>


                                <div class="form-group">

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info border-info"><i
                                                    class="ti-announcement"></i></span>

                                        </div>
                                        <select id="email" type="text" class="form-control pl-15" name="type"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            <option value=''>Select Service You Render</option>
                                            <option value='Cleaning Service'>Cleaning Service</option>
                                            <option value='Electrician'>Electrician</option>
                                            <option value='Painter'>Painter</option>
                                            <option value='Plumber'>Plumber</option>
                                            <option value='Mechanic'>Mechanic</option>
                                            <option value='A.C Technician'>A.C Technician</option>
                                            <option value='Phone Engineer'>Phone Engineer</option>
                                            <option value='Laptop Engineer'>Laptop Engineer</option>
                                            <option value='Kitchen Appliances Engineer'>Kitchen Appliances Engineer
                                            </option>
                                            <option value='TV/Playstation Engineer'>TV/Playstation Engineer</option>
                                            <option value='Washing Machine Specialist'>Washing Machine Specialist
                                            </option>





                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info border-info"><i
                                                    class="ti-home"></i></span>

                                        </div>
                                        <select id="school_id" type="text" class="sch_id form-control pl-15"
                                            name="school_id" value="{{ old('email') }}" required autocomplete="email"
                                            autofocus>
                                            <option value=''>Select School</option>
                                            @foreach (App\Models\schools::all() as $school)
                                            <option value='{{ $school->id }}'>{{ $school->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info border-info"><i
                                                    class="ti-flag"></i></span>

                                        </div>
                                        <select id="school_location" type="text" class="form-control pl-15"
                                            name="location_id" value="{{ old('email') }}" required autocomplete="email"
                                            autofocus>
                                            <option value=''>Select Location</option>


                                        </select>
                                    </div>
                                </div>









                                <div class="form-group">

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info border-info"><i
                                                    class="ti-lock"></i></span>

                                        </div>
                                        <input id="password" Placeholder='Password' type="password"
                                            class="form-control pl-15" name="password" required
                                            autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info border-info"><i
                                                    class="ti-lock"></i></span>

                                        </div>
                                        <input id="password" Placeholder='Confirm Password' type="password"
                                            class="form-control pl-15" name="password_confirmation" required
                                            autocomplete="new-password">
                                    </div>
                                </div>


                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-info btn-block margin-top-10">REGISTER</button>
                                </div>
                                <div class="text-center">
                                    <p class="mt-15 mb-0">Already have an account? <a href="/login"
                                            class="text-info ml-5">Sign In</a></p>
                                </div>
                            </form>

                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script>
        $(document).ready(function() {
      $("#school_id").on('change',function() {
     var id = $(".sch_id").val();
        $("#school_location").empty();
			$.get('{{ route('getlocation') }}?id=' + id, function (data) {
			console.log(data,'the locations')
   for (var index = 0; index <= data.length - 1; index++) {
      $('#school_location').append('<option value="' + data[index].id + '">' + data[index].name + '</option>');
   }
      
    })
    })
    })
    </script>

    <!-- jQuery 3 -->
    <script src="{{ asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js') }}"></script>

    <!-- popper -->
    <script src="{{ asset('assets/vendor_components/popper/dist/popper.min.js') }}"></script>

    <!-- Bootstrap 4.0-->
    <script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

</body>

</html>