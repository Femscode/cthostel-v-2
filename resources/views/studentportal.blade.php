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
    <link rel="stylesheet" href="{{ asset('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css') }}">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-extend.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/css/master_style.css') }}">

    <!-- Superieur Admin skins -->
    <link rel="stylesheet" href="{{ asset('assets/css/skins/_all-skins.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

</head>

<body class="hold-transition bg-img" style="background-image: url('/myimages/CTH-bg.jpg')"
    data-overlay="4">

    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">
            <div class="col-12">
                <div class="row no-gutters justify-content-md-center">
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="content-top-agile h-p100 skin-blue">
                            <img src='{{ asset('myimages/egbamiguy.png') }}'
                                style='height:200px; width:250px; margin:20px; border-radius:5px;padding:4px'
                                href='{{ asset('myimages/funaablogo.jpg') }}' />
                            <p class="text-white">Egbami Registration</p>

                           
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="p-40 bg-white content-bottom h-p100">


                            <form class="form-horizontal" method="POST" action="{{ route('studentregister') }}">
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
                              @if(Session::has('success'))
                              <div class='alert alert-success'>
                               {{ Session::get('success')}}
                              </div>
                              @endif
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info border-info"><i
                                                    class="ti-user"></i></span>
                                        </div>
                                        <select name="school" required id="school" class="form-control pl-15">
                                          <option value=''>Select Your institution</option>
                                         <option value='Federal University Of Agriculture, Abeokuta'>Federal University Of Agriculture Abeokuta</option>
     <option value='Moshood Abiola Polytechnic'>Moshood Abiola Polytechnic</option>
     <option value='Federal University Of Oye Ekiti (FUOYE)'>Federal University Of Oye Ekiti (FUOYE)</option>
     <option value='Obafemi Awolowo University, Ile Ife'>Obafemi Awolowo University, Ile Ife</option>
     <option value='Federal Polytechnic Offa'>Federal Polytechnic Offa</option>
     <option value='University Of Ibadan'>University Of Ibadan</option>
     <option value='Olabisi Onabanjo University, Ago-Iwoye'>Olabisi Onabanjo University, Ago-Iwoye</option>
     <option value='Lagos State University (LASU)'>Lagos State University (LASU)</option>
     <option value='Federal College Of Educatio(Abeokuta), Oshiele'>Federal College Of Educatio(Abeokuta), Oshiele</option>
                                      </select>
        
                                    </div>
                                </div>
                              
                              
                                 <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info border-info"><i
                                                    class="ti-user"></i></span>
                                        </div>
                                        <select name="location" required id="location" class="form-control pl-15">
                                          <option value=''>Select Your Hostel Location</option>
                                         <option value='Harmony Estate'>Harmony Estate</option>
     <option value='Kofesu(School Gate)'>Kofesu (School Gate)</option>
     <option value='Accord Estate'>Accord Estate</option>
     <option value='Oluwo'>Oluwo</option>
     <option value='Funaab Zoo Area'>FUNAAB ZOO AREA</option>
     <option value='Isolu(Emere)'>Isolu (Emere)</option>
     <option value='Isolu(Cele)'>Isolu(Cele)</option>
     <option value='Camp(Apakila)'>Camp(Apakila)</option>
     <option value='Camp(Fatola)'>Camp(Fatola)</option>
     <option value='Camp(Surulere)'>Camp(Surulere)</option>
                                          
     <option value='Camp Ilupeju'>Camp(Ilupeju)</option>
                                      </select>
        
                                    </div>
                                </div>
                             
                               
                                
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info border-info"><i
                                                    class="ti-user"></i></span>
                                        </div>
                                        <input type="text" name="email" id="email" class="form-control pl-15"
                                            placeholder="Input your email address">
                                    </div>
                                </div>
                               
                               


                            
                               
                               
                                <div class="form-group">

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info border-info"><i
                                                    class="ti-user"></i></span>
                                            
                                    </div>
                                    <input id="phone" min='11'placeholder='Input your phone number' required type="number"
                                            class="form-control pl-15" name="phone">

                                </div>
                            </div>
                               
                                <a style='color:red' href='/faq'>How can Egbami of CTHostel save me in an emergency situation?</a>

                            

                            <div class="col-12 text-center">
                                <button type="submit"  class="btn btn-info btn-block margin-top-10">REGISTER</button>
                              </div>
                              <div class="text-center">
								
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


    <!-- jQuery 3 -->
    <script src="{{ asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js') }}"></script>

    <!-- popper -->
    <script src="{{ asset('assets/vendor_components/popper/dist/popper.min.js') }}"></script>

    <!-- Bootstrap 4.0-->
    <script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

</body>

</html>
