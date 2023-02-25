<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Album;
use App\Models\schools;
use App\Models\Category;
use App\Models\roommate;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class FrontendCOntroller extends Controller
{
    public function cthostel($slug,$id) {
      
        
       $data['album'] = $album = Album::with('albumimages')->where('slug',$slug)->where('status',1)->where('id',$id)->get()[0];
       $data['albums'] = Album::where('school_id', $album->school_id)->where('status',1)->paginate(20);
       $data['similar_hostels'] = Album::where('school_id', $album->school_id)->orderBy('rank')->where('status',1)->where('category_id',$album->category_id)->paginate(10);
       $data['agenthostel'] =  Album::where('school_id', $album->school_id)->where('status',1)->where('user_id',$album->user_id)->paginate(10);
           
       $data['albumImage'] = Album::where('user_id',$album['user_id'])->where('status',1)->get();
       $data['category'] = Category::where('school_id', $album->school_id)->get();
       $data['school_id'] = $album->school_id;
     
        $data['userId'] = $userId  = Album::where('id',$id)->first()->user_id;
           $follows = 'kokanmi';
     
       $data['follows'] = 'good';
    //    $data['userId'] = 1;
       $data['user'] = User::find($userId);
       //(new User)->amIfollowing($userId);
       $data['roommate'] = $roommate= Roommate::where('hostel_id',$id)->get();
     
       return view('frontend.cthostel',$data);
    //    return view('album.show',$data);
    }

    
    public function fetch_data(Request $request, $id)
    {

        if ($request->ajax()) {

            $data['albums'] = Album::where('school_id', $id)->where('status',1)->paginate(20);
            $data['school_id'] = $id;
            $data['albums'] = $albums = Album::where('school_id', $id)->where('status',1)->where('type',null)->latest()->paginate(20);
            $data['latest'] = Album::where('school_id', $id)->where('status',1)->where('type',null)->latest()->paginate(20);
            $data['cheapest'] = Album::inRandomOrder()->where('status',1)->where('type',null)->where('school_id', $id)->where('price', '<', 50000)->paginate(20);
            $data['highest'] = Album::where('school_id', $id)->where('status',1)->where('type',null)->where('price', '>', 60000)->paginate(20);
            $data['random'] = Album::inRandomOrder()->where('school_id', $id)->where('type',null)->where('status',1)->paginate(20);

            return view('pagination', $data)->render();
        }
    }
    public function filter_fetch_data(Request $request, $id)
    {

        if ($request->ajax()) {

            $data['albums'] = Album::where('school_id', $id)->where('status',1)->orderBy('rank')->paginate(20);
            $data['school_id'] = $id;
            $data['albums'] = $albums = Album::where('school_id', $id)->orderBy('rank')->where('status',1)->latest()->paginate(20);
            $data['searched'] = Album::where('school_id', $id)->orderBy('rank')->where('status',1)->latest()->paginate(20);

            return view('filteredpagination', $data)->render();
        }
    }
    public function cthome(Request $request)
    {
        // dd($request->all());
        $data['school_id'] = $school_id = $request->school_id;
     
     
        $data['school'] = $school = Schools::where('id', $school_id)->get();
        $data['locations'] = Category::where('school_id', $school_id)->get();
        $data['latest'] = Album::where('school_id', $school_id)->orderBy('rank')->where('type', null)->where('status',1)->where('soft_delete',0)->latest()->paginate(20)->withQueryString();
        // $data['random'] = Album::inRandomOrder()->where('status',1)->orderBy('rank')->where('type', null)->where('school_id', $school_id)->where('price', '>', 150000)->where('soft_delete',0)->paginate(20)->withQueryString();
        return view('frontend.cthome', $data);
    }
    public function latest(Request $request)
    {
        // dd($request->all());
        $data['school_id'] = $school_id = $request->school_id;
     
     
        $data['school'] = $school = Schools::where('id', $school_id)->get();
        $data['locations'] = Category::where('school_id', $school_id)->get();
        $data['latest'] = Album::where('school_id', $school_id)->orderBy('rank')->where('type', null)->where('status',1)->where('soft_delete',0)->latest()->paginate(20)->withQueryString();
        // $data['random'] = Album::inRandomOrder()->where('status',1)->orderBy('rank')->where('type', null)->where('school_id', $school_id)->where('price', '>', 150000)->where('soft_delete',0)->paginate(20)->withQueryString();
        return view('frontend.cthome', $data);
    }
    public function cheapest($school_id) {
        $data['school'] = $school = Schools::where('id', $school_id)->get();
        $data['locations'] = Category::where('school_id', $school_id)->get();
        $data['school_id'] = $school_id;
      
        $data['cheapest'] = Album::orderBy('rank')->where('status',1)->where('type', null)->where('school_id', $school_id)->where('price', '<', 100000)->where('soft_delete',0)->paginate(20)->withQueryString();
        // dd($data['cheapest']);
        return view('frontend.cheapest', $data);  
    }
    public function bestrated($school_id) {
        $data['school'] = $school = Schools::where('id', $school_id)->get();
        $data['locations'] = Category::where('school_id', $school_id)->get();
        $data['school_id'] = $school_id;
        $data['highest'] = Album::orderBy('rank')->where('school_id', $school_id)->where('type', null)->where('status',1)->where('price', '>', 100000)->where('soft_delete',0)->paginate(20)->withQueryString();
        return view('frontend.bestrated', $data);  
    }
    // }
 
    public function agentpage($slug, $id)
    {

            
        $data['albums'] = Album::where('user_id',$id)->where('status',1)->latest()->paginate(20);
       $data['agent'] = $agent = User::where('id',$id)->first();
       $data['school_id'] = $agent->school_id;

       $data['locations'] = Category::where('school_id', $data['school_id'])->get();

    //    dd($agent);
        return view('agentpage', $data);
    }
    public function index(Request $request)
    {
        // $category = DB::table('');
        // dd($category);
      
        $albums = Album::latest()->where('status',1)->paginate(8);
        $slider = Album::latest()->where('status',1)->paginate(20);
        $albums2 = Album::inRandomOrder()->where('status',1)->get();
        $harmony = Album::inRandomOrder()->where('category_id', 1)->where('status',1)->orWhere('category_id', 2)->orWhere('category_id', 3)->limit(3);
        $isolu = Album::inRandomOrder()->where('category_id', 4)->where('status',1)->orWhere('category_id', 5)->orWhere('category_id', 7)->orWhere('category_id', 8)->get();
        $camp = Album::inRandomOrder()->where('category_id', 6)->where('status',1)->orWhere('category_id', 9)->orWhere('category_id', 10)->orWhere('category_id', 11)->limit(3);
        $cheapest = Album::inRandomOrder()->where('price', '<', '40000')->where('status',1)->limit(3);
        return view('funnab', compact('albums', 'slider', 'albums2', 'harmony', 'camp', 'isolu', 'cheapest'));
        return view('hostel', compact('albums', 'slider', 'albums2', 'harmony', 'camp', 'isolu', 'cheapest'));
        //return view('home',compact('albums'));
    }


    public function albumCategory($id)
    {
        $albums = Album::where('category_id', $id)->where('status',1)->get();
        return view('album-category', compact('albums'));
    }

    public function getallalbum()
    {
        $album = Album::paginate(3);
        return new AlbumResource(Album::paginate(3));
        // return $album;
    }
    public function school(Request $request)
    {
        $data['school_id'] = $request->school_id;

        $data['school'] = Schools::where('id', $data['school_id'])->get();

        $data['albums'] = Album::where('school_id', $data['school_id'])->where('status',1)->latest()->paginate(20);
        $data['albums2'] = Album::inRandomOrder()->where('status',1)->get();

        $data['location'] = Category::where('school_id', $data['school_id'])->get();
        // dd($school,$album,$location);
        /*  if($request->school_id == 1) {
      return redirect('https://hostel.thecaretech.org');
    }
    else {
      return view('blank');
    }*/
        return view('schoolpage', $data);
    }
    public function welcomepage()
    {
        $schools = DB::table('schools')->get();
        return view('welcomepage', compact('schools'));
    }
    public function filter(Request $request)
    {
        if($request->has('school_id') && $request->has('location')) {
            session()->put('filter_school_id', $request->school_id);
            session()->put('filter_location', $request->location);
            session()->put('filter_min_price', $request->min_price);
            session()->put('filter_max_price', $request->max_price);
            $school_id = $request->school_id;
            $location = $request->location;
            $min_price = $request->min_price;
            $max_price = $request->max_price;
        }
        else {
            $school_id = session()->get('filter_school_id');
            $location = session()->get('filter_location');
            $min_price = session()->get('filter_min_price');
            $max_price = session()->get('filter_max_price');
        }
        if($school_id == null || $location == null ) {
            return redirect()->back()->with('message','Please fill the filter form appropriately');
        }
        $data['locations'] = Category::where('school_id', $school_id)->get();
        $id = $location;
       
        $minimum = (array_map('intval', [$min_price]));
        $maximum = (array_map('intval', [$max_price]));
        $location = (array_map('intval', $id));
        $locate = count($location);
        $slider = Album::where('status',1)->where('soft_delete',0)->orderBy('rank')->latest()->paginate(20);
        // dd($minimum,$id,$location);
        $data['school_id'] = $school_id;
        $filter = [];
      
        $subcategory = DB::table('albums')->where('status',1)->where('soft_delete',0)->whereIn('category_id', $location)->get();
        foreach ($location as $sub) {
            array_push($filter, $sub);
        }
        $data['filtered'] = $filtered = Album::where('status',1)->orderBy('rank')->where('soft_delete',0)->whereIn('category_id', $filter)->where('price', '>=', $minimum[0])->where('price', '<=', $maximum[0])->paginate(20)->withQueryString();
        $data['searched'] = $filtered = Album::where('status',1)->orderBy('rank')->where('soft_delete',0)->whereIn('category_id', $filter)->where('price', '>=', $minimum[0])->where('price', '<=', $maximum[0])->paginate(20)->withQueryString();
        
        return view('frontend.filtered', $data);




        // $filtered = DB::table('categories')->where('id',$id)->get();
        $filtered2 = DB::table('albums')->where('price', '>=', 30000)->where('price', '<=', 400000)->get();
        for ($i = 0; $i < $locate; $i++) {
            $good = DB::table('albums')->orWhere('category_id', $location[$i])->where('price', '>=', $minimum[0])
                ->where('price', '<=', $maximum[0])->get();
            // dd($good);
            $filtered[] = $good;
        }
        // dd($filtered);
        dd($filtered);
        // dd($filtered2);
        // dd($filtered,$hostel);


    }

    public function userAlbum($id)
    {
        $albums  = Album::where('user_id', $id)->get();
        if (\Auth::check()) {
            $userId = $id;
            $follows = 'kokanmi na';
        } else {
            $userId = $id;
        }
        $follows = 'kokanmi';
        $user2 = User::where('id', $id)->get();
        $user = User::where('id', $id)->first();
        $userBgPic = $user->bgpic;

        return view('user-album', compact('albums', 'userId', 'follows', 'userBgPic', 'user2'));
    }
    // dd($request->schoolname);


    public function allhostel(Request $request)
    {
        if ($request->search) {
            $products = Album::where('name', 'like', '%' . $request->search . '%')
                ->where('status',1)->orWhere('description', 'like', '%' . $request->search . '%')
                ->orWhere('price', 'like', '%' . $request->search . '%')
                ->orWhere('category_id', 'like', '%' . $request->search . '%')

                ->paginate(20);
            return view('allhostel', compact('products'));
        }

        $products  = Album::where('status',1)->latest()->paginate(20);
        return view('allhostel', compact('products'));
    }
    public function subscription(Request $request) {
    $contact = DB::insert('insert into subscription (email) values(?)', [$request->email]);
      return 'subscribed successfully';
    }

    public function contact(Request $request)
    {
        // dd($request->all());
        $contact = DB::insert('insert into contacts (name,email,phone,message) values(?,?,?,?)', [$request->name, $request->email, $request->phone, $request->message]);
        if ($contact == true) {
            return redirect()->back()->with('alert', "Thanks $request->name, your message has been sent successfully.");
        } else {
            return redirect()->back()->with('alert', "Sorry, your message could not be sent,try again later");
        }
    }
  
    public function shs(Request $request)
    {

        $data['school_id'] = $school_id = $request->school_id;
        $data['albums'] = Album::where('user_id',1)->where('status',1)->latest()->paginate(20);
       $data['agent'] = $agent = User::where('id',1)->first();
       $data['school_id'] = $agent->school_id;


        // if($school_id == 1) {
        //     return view('counter');
        // } else {

        
        $data['school'] = $school = Schools::where('id', $data['school_id'])->get();
        $data['roommate'] = Roommate::paginate(10);
     	$id = $request->school_id;

        // dd($albums);
        $data['services'] = User::where('school_id', $data['school_id'])->get();
             
        $data['mechanics'] = User::where('type','mechanic')->where('school_id', $id)->get();
        $data['electricians'] = User::where('type','electrician')->where('school_id', $id)->get();
        $data['ac_technicians'] = User::where('type','A.C Technician')->where('school_id', $id)->get();
        $data['plumbers'] = User::where('type','plumber')->where('school_id', $id)->get();
        $data['painters'] = User::where('type','painter')->where('school_id', $id)->get();
       $data['kitchen_engineer'] = User::where('type','Kitchen Appliances Engineer')->where('school_id', $id)->get();
       $data['phone_engineer'] = User::where('type','Phone Engineer')->where('school_id', $id)->get();
       $data['laptop_engineer'] = User::where('type','Laptop Engineer')->where('school_id', $id)->get();
       $data['washing_machine_engineer'] = User::where('type','Washing Machine Specialist')->where('school_id', $id)->get();
      $data['tv_engineer'] = User::where('type','TV/Playstation Engineer')->where('school_id', $id)->get();
        // dd($data['painters']);
        $data['locations'] = Services::where('school_id', $data['school_id'])->inRandomOrder()->paginate(5);
        
        return view('shs', $data);
    
    }
  public function servicepage()  {
    $data['schools'] = schools::get();
    
  	return view('technician.servicepage',$data);
  }
  public function searchtechnician(Request $request) {
    
  //  $users = User::where('school_id', $request->school_id)->where('category_id',$request->location_id)->where('type',$request->service_type)->get();
     $users = User::where('school_id', $request->school_id)->where('type',$request->service_type)->get();
        
    return $users;
    
  }
  public function getContact() {
    $users = User::where('category_id','!=',null)->pluck('phone');
    return $users;
  }
  public function upgrade_account()
  {

    
      $user = Auth::user();
      

      return redirect()->away('https://wa.me/2349058744473?text=Hi%2C%20my%20account%20name%20is%20%28'.$user->name.'%29.%0aI%20will%20like%20to%20upgrade%20my%20CT-Hostel%20account.%0a');
      // return redirect()->away('https://wa.me/234{{substr($album->user->phone,1)}}?text=Hi%2C%20my%20name%20is%20%28Input%20your%20name%29.%0aHOSTEL%20REQUEST%20FOR%20CTHOSTEL.%0aInstitution:{{$album->school->name}}%0aHostel%20name:%20({{$album->name}})%0aHostel%20Price:{{$album->price}}%0aLocation:{{$album->category->name}}%0aAgent%20in%20charge:{{$album->user->name}}%0a(Input%20other%20message%20here)%20');
  }
}
