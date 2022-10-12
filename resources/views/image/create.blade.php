@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            @if(Session::has('message'))
<div style='text-align:center;font-family:georgia' class='alert alert-success'>{{Session::get('message')}}</div>
@else
                <div class="card-header"><p class='alert alert-success'>
                     Hostel Created Successfully<br>You can upload bulk images of the hostels surrondings, kitchen, bathroom e.t.c<br>
                  <span style='color:red'> It is advisable to upload a maximum of three(3) pictures at a time if the network is slow.</span><br>
                 <a href='https://hostel.thecaretech.org/good/{{$user_id}}'> <button class='btn btn-danger'>
                    Skip Upload
                   </button></a>
 </p></div>@endif
                
                <div class="card-body">
                   <!-- <upload :album_id="{{$album_id}}"></upload> -->
                   
		<form method="post" action='{{Route("image.upload",[$album_id])}}' enctype="multipart/form-data">
        @csrf
         <!-- <div class="card-header"><p class='alert alert-danger'>
             It is advisable to upload a maximum of three(3) pictures at a time if you have a slow network.
                 
                  </p></div>-->
                
			<div class="form-group files text-center" >
				<input type="file" name="files[]" multiple required="required">
				
				<input class="btn btn-primary" type='submit' value='Upload'>
			</div>
			
		</form>
                
        </div>
    	<!-- <progress max="100" style="width: 100%;" value="uploadPercentage" ></progress> -->
          </div>
		<div class="container">
          <div class='card-body'>
            <div class="row">
				
                    @foreach($image as $img)
                 
						<img style='height:100px;width:100px' src="https://hostel.thecaretech.org/public/images/{{$img->image}}" class="img-fluid img-thumbnail">
                        <form action='{{Route("destroy.image",[$img->id])}}' method='get'>@csrf
                        {{method_field('delete')}}
						<button class="btn btn-danger btn-sm" type='submit'>Delete</button>
                        </form>
                        @endforeach
			</div>
             
          </div>
          <div>
            <a href='https://hostel.thecaretech.org/good/{{$user_id}}'> <button style='margin:0px;width:100%' class='btn btn-success'>
                    Proceed >>>
                   </button></a>  

          </div>
			
		</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
