<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <title>CTHostel | Register</title>
    <meta name="description" content="...the safest place to get it cheaper without getting scammed." />
    <meta name="keywords" content="...the safest place to get it cheaper without getting scammed." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:title" content="...the safest place to get it cheaper without getting scammed." />
    <meta property="og:url" content="https://cthostel.com" />
    <meta property="og:site_name" content="CTHostel | Dashboard" />
    <link rel="canonical" href="https://cthostel.com" />
    <link href="{{ asset('myimages/fav.png') }}" src='{{ asset(' myimages/fav.png') }}' rel="icon" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ asset('backend/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet') }}"
        type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('backend/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    @livewireStyles
    <!--end::Global Stylesheets Bundle-->
    <!--Begin::Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&amp;l=' + l : '';
                j.async = true;
                j.src = '../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
    </script>
    <!--End::Google Tag Manager -->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!--End::Google Tag Manager (noscript) -->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url('/backend/media/bg4.jpg');
            }

            [data-theme="dark"] body {
                background-image: url('/metronic8/demo1/assets/media/auth/bg4-dark.jpg');
            }
        </style>
        <!--end::Page bg image-->
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-column-fluid flex-lg-row">
            <!--begin::Aside-->
            <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
                <!--begin::Aside-->
                <div class="d-flex flex-center flex-lg-start flex-column">
                    <!--begin::Logo-->
                    <a href="/metronic8/demo1/../demo1/index.html" class="mb-7">
                        <img alt="Logo" src="{{asset('myimages/logo_header.png')}}"
                            style='height:50px; height:50px; margin:20px; border-radius:5px;padding:4px' />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Title-->
                    <!--end::Title-->
                </div>
                <!--begin::Aside-->
            </div>
            <!--begin::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-center w-lg-50 p-10">
                <!--begin::Card-->
                <div class="card rounded-3 w-md-550px">
                    <!--begin::Card body-->
                    <div class="card-body p-10 p-lg-20">
                        <!--begin::Form-->
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
                           
                            <div class="text-center mb-11">
                                <!--begin::Title-->
                                <h1 class="text-dark fw-bolder mb-3">Technician/Service Registration</h1>
                                <!--end::Title-->
                                <!--begin::Subtitle-->
                                <div class="text-gray-500 fw-semibold fs-6">Register as a technician</div>
                                <!--end::Subtitle=-->
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                   
                                    <input type="text" name="name" id="name" class="form-control pl-15"
                                        placeholder="Username ">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                   
                                    <input type="text" name="email" id="email" class="form-control pl-15"
                                        placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="input-group mb-3">
                                    
                                    <input id="phone" min='11' placeholder='Phone number' required type="number"
                                        class="form-control pl-15" name="phone">

                                </div>
                            </div>


                            <div class="form-group">

                                <div class="input-group mb-3">
                                   
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
                                    
                                    <select id="school_location" type="text" class="form-control pl-15"
                                        name="location_id" value="{{ old('email') }}" required autocomplete="email"
                                        autofocus>
                                        <option value=''>Select Location</option>


                                    </select>
                                </div>
                            </div>









                            <div class="form-group">

                                <div class="input-group mb-3">
                                    
                                    <input id="password" Placeholder='Password' type="password"
                                        class="form-control pl-15" name="password" required
                                        autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="input-group mb-3">
                                   
                                    <input id="password" Placeholder='Confirm Password' type="password"
                                        class="form-control pl-15" name="password_confirmation" required
                                        autocomplete="new-password">
                                </div>
                            </div>


                            <div class="d-grid mb-10">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-success">
                                    <!--begin::Indicator label-->
                                    <span class="indicator-label">Sign Up</span>
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    <!--end::Indicator progress-->
                                </button>
                            </div>
                            <div class="text-center">
                                <p class="mt-15 mb-0">Already have an account? <a href="/login"
                                        class="text-info ml-5">Sign In</a></p>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->
    <script src="{{ asset('assets/vendor_components/popper/dist/popper.min.js') }}"></script>

    <!-- Bootstrap 4.0-->
    <script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js') }}"></script>

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
</body>
<!--end::Body-->

</html>