@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Hostel</div>

                <div class="card-body">
				<template>
	<div>
		<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> -->
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Hostel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       

	  <form action="{{route('test.update',[$album->id])}}" method="POST" enctype="multipart/form-data">@csrf
          {{method_field('PUT')}}
       		<div class="form-group">
			
				<label>Name of Hostel</label>

				<input type="text" name="name" class="form-control" maxlength="15" required="" value='{{$album->name}}'>
				
			
			</div>
			<div class="form-group">
				<label>Hostel Description</label>
				<textarea class="form-control"  maxlength="200" name="description" required></textarea>
				
			</div>
			
			<div class="form-group">
				<label>Hostel Price</label>
				<input name='price' value='{{$album->price}}' type='number' class='form-control'>
				<span  class="alert">
					
				</span>
			</div>
			<div class="form-group">
				<label>Hostel Location</label>
					<select class="form-control" name="category" required>
                <option value=''>Select Location</option>
				@foreach(App\Category::all() as $category)
                <option value='{{$category->id}}'>{{$category->name}}</option>
                @endforeach
					
				</select>

			
			</div>
			<div class="form-group">
				<label>Display Image of Hostel</label>
				<input type='file' name='image' class="form-control">
				
			</div>
			<div class="form-group">
				
				<button class="btn btn-secondary" type="submit">update Hostel</button>
			</div>
			
		</form>

      </div>
     
    </div>
  </div>
</div>
	</div>
</template>

</div>
            </div>
        </div>
    </div>
</div>
@endsection