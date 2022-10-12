@foreach($phone_engineer as $album)



<div class="product-layout  has-extra-button">
    <div class="product-thumb">
      <div class="image">
        <div class="quickview-button">
        </div>

        <a href="https://cthostel.com/cthostel/olanike-hostel/55" class="product-img ">
          <div>
            <img src="public/agent/{{$album->profilePic ?? 'engineer.png'}} " data-src="https://cthostel.com/myimages/ac_technician.jpg" data-srcset="https://cthostel.com/public/hostelimage/ADHC5KN9WrVEldwypuXmVth0ipplY51YvkexHPbp.jpg" width="150" height="150" alt="CTHostel" title="" class="img-responsive">

          </div>
        </a>

        <div class="product-labels">
          <span class="product-label product-label-31 product-label-default"><b>NEW</b></span>
        </div>

      </div>

      <div class="caption">
        <div class="stats">
       <!--   <span class="stat-1"><span class="stats-label">Brand:</span> <span><a
                href='https://cthostel.com/cthostel/olanike-hostel/55'>Olanike h...
                </a></span></span>-->
          <span class="stat-2" style="color:green"><span class="stats-label"></span> <span>{{$album->type}}</span></span>
          <span class="stat-2"><span class="stats-label"></span><span>{{Str::limit($album->name,10)}}</span></span>
        </div>
<input id="getid" type="hidden" value="1">
         
        <div class="name"><a href="">{{$album->category->name}}</a></div>
        <div class="name">
            <a class="btn btn-primary btn-xm text-white float-left m-5" style="margin-right:20px; background-color:#5bc0de;border-radius:3px;color:white" href="tel:09058744473">Call</a>
            <a class="btn btn-success btn-xm text-white float-right m-5" style="border-radius:3px;color:white;margin-right:15px" href="https://wa.me/2349058744473?text=Hi%2C%20my%20name%20is%20%28Input%20your%20name%29.%0aREQUEST%20FOR%20CTHOSTEL-SERVICE.%0aService%20name:{{$album->type}}%0aLocation:%20({{$album->category->name}})%0a(Input%20other%20message%20here)%20">Message</a>
          <a class = "btn btn-info btn-xm" href='https://cthostel.com/{{$album->username}}'>View works</a>
        </div>



      
        <div class="extra-group">
          <div>
          
            
          </div>
        </div>
      </div>
    </div>
  </div>




@endforeach