	@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Select Your Tertiary Institution</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('cthome') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Select School</label>

                            <div class="col-md-6">
                              
                                <select id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="school_id" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                  <option disabled>Select School</option>
                                  @foreach(App\schools::all() as $school)
                                  <option value='{{$school->id}}'>{{$school->name}}</option>
									@endforeach
                                @error('schoolname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </select>
                            </div>
                        </div>

                     
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Proceed
                                </button>

                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
