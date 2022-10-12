@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create new hostel</div>

                <div class="card-body">
				<!-- <album></album> -->

	<div>
		
		<form method='post' action="{{route('album.store')}}" enctype="multipart/form-data">
        @csrf
			<div class="form-group">
			
				<label>Name of Hostel</label>
				<input type="text" name="name" required class="form-control @error('name') is-invalid @enderror" >
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                    
            
				
			
			</div>
			<div class="form-group">
				<label>Description of Hostel</label>
				<textarea class="form-control @error('description') is-invalid @enderror" required  maxlength="200" name="description" ></textarea>
                        @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                
                
			</div>
			<div class="form-group">
				<label>Hostel Price</label>
				<input name='price' type='number' class="form-control @error('price') is-invalid @enderror" required>
                
                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                
			</div>
          <div class="form-group">
				
				<input name='school_id' type='hidden' value='{{Auth::user()->school_id}}'/>
			</div>
			<div class="form-group">
				<label>Hostel Location</label>

				<select class="form-control" name="category_id"  required>
                  <option value=''>Select Location</option>
				@foreach($category as $category)
					<option value='{{$category->id}}'>{{$category->name}}</option>
                    @endforeach
                            <span class='danger'>

				</span>
				</select>
			</div>
			<div class="form-group">
				<label>Display Image of Hostel</label>
				<input type="file" name="image" class="form-control @error('file') is-invalid @enderror" >
                @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                
			</div>
			<div class="form-group">
				
				<button class="btn btn-success" type="submit">Create Hostel</button>
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
