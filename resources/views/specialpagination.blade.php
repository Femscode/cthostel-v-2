@foreach($random as $album)
                        <div class="product-layout  has-extra-button">
                                <div class="product-thumb">
                                  <div class="image">
                                    <div class="quickview-button">
                                    </div>

                                    <a href="{{route("cthostel",[$album->slug,$album->id])}}"
                                      class="product-img ">
                                      <div>
                                        <img
                                          src="{{asset('hostelimage/'.$album->image)}}"
                                          data-src="{{asset('hostelimage/'.$album->image)}}"
                                          data-srcset="{{asset('hostelimage/'.$album->image)}}"
                                          width="250" height="250" alt="Yellow Modern Armchair"
                                          title="" class="img-responsive img-first lazyload" />

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
                                            href="index3a92.html?route=product/manufacturer/info&amp;manufacturer_id=21">{!! Str::limit($album->name,9)!!}
                                            </a></span></span>
                                      <span class="stat-2"><span class="stats-label"></span> #<span>
                                          {{number_format($album->price)}}</span></span>
                                    </div>

                                    <div class="name"><a>{!!Str::limit($album->category->name ?? '-',25)!!}</a></div>



                                  
                                    <div class="extra-group">
                                      <div>
                                        <a href='{{route("cthostel",[$album->slug,$album->id])}}' class="btn btn-extra btn-extra-46">
                                          <span class="btn-text">View Hostel</span>
                                          <input id='getid' type='hidden' value='{{$school_id}}'>
                                        </a>
                                        
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              @endforeach
                                    <div class='col-md-6'>
                              <h6>{!! $random->links() !!}</h6>
</div>