<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
 

    <title>CTH - Log in </title>
	<link href="myimages/fav.png" src='myimages/fav.png' rel="icon" />

    <!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css')}}">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-extend.css')}}">
	
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('assets/css/master_style.css')}}">

	<!-- Superieur Admin skins -->
	<link rel="stylesheet" href="{{ asset('assets/css/skins/_all-skins.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">

</head>
<body class="hold-transition bg-img" style="background-image: url('/myimages/CTH-bg.jpg')" data-overlay="4">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">			
			<div class="col-12">
				<div class="row no-gutters justify-content-md-center">
					<div class="col-lg-4 col-md-5 col-12">
						<div class="content-top-agile h-p100 skin-blue">
							<img src='{{asset('myimages/logo_header.png')}}' style='height:50px; height:50px; margin:20px;background:#fff; border-radius:5px;padding:4px' href='{{asset('myimages/logo_header.PNG')}}'/>
							<p class="text-white">Sign in to access your hostels</p>

							<div class="text-center text-white">
							  <p class="mt-20">- Sign With -</p>
							  <p class="gap-items-2 mb-20">
								  <a class="btn btn-social-icon btn-outline btn-white" href="#"><i class="fa fa-facebook"></i></a>
								  <a class="btn btn-social-icon btn-outline btn-white" href="#"><i class="fa fa-twitter"></i></a>
								  <a class="btn btn-social-icon btn-outline btn-white" href="#"><i class="fa fa-google-plus"></i></a>
								  <a class="btn btn-social-icon btn-outline btn-white" href="#"><i class="fa fa-instagram"></i></a>
								</p>	
							</div>
							
						</div>				
					</div>
					<div class="col-lg-5 col-md-5 col-12">
						<div class="p-40 bg-white content-bottom h-p100">
							

                        <form action="{{ route('login') }}" class="form-horizontal" method="post" class="form-element">
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
											<span class="input-group-text bg-info border-info"><i class="ti-user"></i></span>
										</div>
										<input type="text" name="email" id="email" class="form-control pl-15" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-info border-info"><i class="ti-lock"></i></span>
										</div>
										<input type="password" name="password" id="password" class="form-control pl-15" placeholder="Password">
									</div>
								</div>
								  <div class="row">
									<div class="col-6">
									  <div class="checkbox">
										<input type="checkbox" id="basic_checkbox_1" >
										<label for="basic_checkbox_1">Remember Me</label>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-6">
									 <div class="fog-pwd text-right">
									
										<a href="{{route('password.request')}}"><i class="ion ion-locked"></i> Forgot password?</a><br>
									  </div>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-12 text-center">
									  <button type="submit"  class="btn btn-info btn-block margin-top-10">SIGN IN</button>
									</div>
                                    <div class="text-center">
								<p class="mt-15 mb-0">Don't have an account? <a href="/register" class="text-info ml-5">Sign Up</a></p>
							</div>
									<!-- /.col -->
								  </div>
							</form>		

							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- jQuery 3 -->
	<script src="{{ asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js')}}"></script>
	
	<!-- popper -->
	<script src="{{ asset('assets/vendor_components/popper/dist/popper.min.js')}}"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

</body>
</html>
