@foreach($latest as $album)

<div class="product-layout  has-extra-button rounded">
  <div class="product-thumb ">
    <div class="image">
      <div class="quickview-button">
      </div>

      <a href="{{route("cthostel",[$album->slug,$album->id])}}"
        class="product-img ">
        <div>
          <img src="https://cthostel.com/public/{{$album->image  }}" data-src="https://cthostel.com/public/{{$album->image  }}"
            data-srcset="https://cthostel.com/public/{{$album->image  }}" width="250" height="250" alt="Hostel Image" title=""
            class="img-responsive" />
          {{-- <img src="{{asset('hostelimage/'.$album->image)}}" data-src="{{asset('hostelimage/'.$album->image)}}"
            data-srcset="{{asset('hostelimage/'.$album->image)}}" width="250" height="250" alt="CTHostel" title=""
            class="img-responsive" /> --}}

        </div>
      </a>

      <div class="product-labels">
        <span class="product-label product-label-31 product-label-default"><b>10% Off</b></span>
      </div>

    </div>

    <div class="caption">
      <div class="stats">
        <span class="stat-2" style='color:red'><span class="stats-label text-red"></span><strike> ₦<span>
              {{number_format($album->price + ($album->price * 0.1))}}</span></strike></span>
        <span class="stat-2" style='color:green;font-size:18px'><span class="stats-label"></span> <span>
            ₦{{number_format($album->price)}}</span></span>
      </div>
      <input id='getid' type='hidden' value='{{$school_id}}'>

      <div class="name"><a href='{{route("cthostel",[$album->slug,$album->id])}}'>{!!Str::limit($album->name,25)!!} ,
          {!!Str::limit($album->category->name ?? '--',25)!!}</a></div>
      <div class="name"><a class='btn btn-success btn-sm text-white'
          style='background-color:#033533;border-radius:3px;color:white'
          href='{{route("cthostel",[$album->slug,$album->id])}}'>View hostel</a></div>
    </div>
  </div>
</div>
@endforeach
<div class='col-md-12' style='border-radius:5px;border:1px solid #033533'>

  <div style='background-color:white;font-size:15px;padding:5px;border:1px solid black;border:radius:3px'>
          {!! $latest->links('pagination::bootstrap-4') !!}
  </div>

</div>