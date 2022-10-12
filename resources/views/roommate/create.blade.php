@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Roommate</div>

                <div class="card-body">
				<template>
	<div>

       <form  action='{{Route("storehostel",[$album->id])}}' method='post' enctype="multipart/form-data" >
       @csrf
			<div class="form-group">
			    <label>Name</label>
                <input type="text" name="name" class="form-control" required="">
			</div>
			<div class="form-group">
			    <label>Gender</label>
                <select class="form-control" name="gender" required>
                <option value=''>Select Gender</option>
                <option value='Male'>Male</option>
                <option value='Female'>Female</option>
              		</select>
            </div>
			<div class="form-group">
			    <label>Religion</label>
                <select class="form-control" name="religion" required>
                <option value=''>Select Religion</option>
                <option value='Christainity'>Christainity</option>
                <option value='Islamic'>Islamic</option>
                <option value='Traditional'>Traditional</option>
                <option value='Others'>Others</option>
              		</select>
            </div>
			<div class="form-group">
			    <label>Department</label>
                <input type="text" name="department" class="form-control" required="" >
			</div>
			<div class="form-group">
			    <label>Level</label>
                <select class="form-control" name="level" required>
                <option value=''>Select Level</option>
                <option value='100 Level'>100 Level</option>
                <option value='200 Level'>200 Level</option>
                <option value='300 Level'>300 Level</option>
                <option value='400 Level'>400 Level</option>
                <option value='500 Level'>500 Level</option>
                <option value='600 Level'>600 Level</option>
                      </select>
                </div>
			<div class="form-group">
			    <label>Phone Number</label>
                <input type="number" name="phone" class="form-control" maxlength="15" required="" >
			</div>
			<div class="form-group">
			    <label>Image</label>
                <input type="file" name="image" class="form-control" required="" >
			</div>
			<div class="form-group">
				
				<button class="btn btn-secondary" type="submit">Request</button>
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