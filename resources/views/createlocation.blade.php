@extends('layouts.app')

@section('content')
@if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create new Location</div>

                <div class="card-body">
				<!-- <album></album> -->

	<div>
		
		<form  method='post' action="{{route('storeLocation')}}" enctype="multipart/form-data">
        @csrf
			<div class="form-group">
			
				<label>Name of School</label>
              	<select name='school_id' class="form-control @error('school_id') is-invalid @enderror">
                  @foreach(App\schools::all() as $school)
                  <option value='{{$school->id}}'>{{$school->name}}</option>
                  @endforeach
              </select>
				
                        @error('school_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                    
            
				
			
			</div>
			<div class="form-group">
				<label>Location</label>
				<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder='Name of location' >
                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                
			</div>
			<div class="form-group">
				
				<button class="btn btn-success" type="submit">Create Location</button>
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
