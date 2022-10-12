  @foreach($searched as $album)
                              <div class="product-layout  has-extra-button">
                                <div class="product-thumb">
                                  <div class="image">
                                    <div class="quickview-button">
                                    </div>

                                    <a href="{{route('cthostel',[$album->slug,$album->id])}}"
                                      class="product-img ">
                                      <div>
                                        <img
                                          src="https://cthostel.com/public/hostelimage/{{$album->image}}"
                                          data-src="https://cthostel.com/public/hostelimage/{{$album->image}}"
                                          data-srcset="https://cthostel.com/public/hostelimage/{{$album->image}}"
                                          width="250" height="250" alt="{{$album->name}}"
                                          title="{{$album->name}}" class="img-responsive img-first" />

                                      </div>
                                    </a>

                                    <div class="product-labels">
                                      <span
                                        class="product-label product-label-31 product-label-default"><b>New</b></span>
                                    </div>

                                  </div>

                                  <div class="caption">
                                    <div class="stats">
                                      <span class="stat-1"><span class="stats-label">Brand:</span> <span><a
                                           href="{{route('cthostel',[$album->slug,$album->id])}}" >{!! Str::limit($album->name,9)!!}
                                            </a></span></span>
                                      <span class="stat-2"><span class="stats-label"></span> #<span>
                                          {{number_format($album->price)}}</span></span>
                                    </div>

                                    <div class="name"><a>{!!Str::limit($album->category->name,25)!!}</a></div>
                                    <div class="name"><a style='background:#003544;color:white;border-radius:4px' class='btn btn-success btn-sm' href="{{route('cthostel',[$album->slug,$album->id])}}">View hostel</a></div>



                                  
                                    <div class="extra-group">
                                      <div>
                                       
                                          <input id='getid' type='hidden' value='{{$school_id}}'>
                                       
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              @endforeach
                              <div class='col-md-6'>
                            <!--  <h6>{!! $searched->links() !!}</h6>-->
                          