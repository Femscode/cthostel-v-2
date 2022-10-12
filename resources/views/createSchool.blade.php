@extends('layouts.app')

@section('content')
@if(Session::has('message'))
<p class='alert alert-success' style='margin:20px'>
  {{Session::get('message')}}
</p>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create new school</div>

                <div class="card-body">
				<!-- <album></album> -->

	<div>
		
		<form  method='post' action="{{route('storeSchool')}}" enctype="multipart/form-data">
        @csrf
			<div class="form-group">
			
				<label>Name of School</label>
				<input type="text" name="name" required class="form-control @error('name') is-invalid @enderror" >
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                    
            
				
			
			</div>
			<div class="form-group">
				<label>Display Image of School</label>
				<input type="file" name="image" class="form-control @error('file') is-invalid @enderror" >
                @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                
			</div>
			<div class="form-group">
				
				<button class="btn btn-success" type="submit">Create School</button>
			</div>
			
		</form>
		<!-- <div v-if="success">
			<a :href="'/upload/images/'+albumId"> Your hostel is created. Please click the link to upload bulk images of the hostel surrounding and structure</a>
		</div> -->

	</div>

<style type="text/css">
	.danger{
		color: red;
	}
</style>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
