<?php

namespace App\Http\Controllers;

use Compressor;
use App\Exception;
use App\Models\User;
use App\Models\Album;
use App\Models\Image;
use App\Models\Egbami;
use App\Models\schools;
use App\Models\Category;
use App\Models\Feedback;
use App\Models\roommate;
use App\Models\saveUser;
use App\Models\Services;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Illuminate\Http\Response;
use App\Models\SpecialRequest;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Resources\AlbumResource;
use Illuminate\Support\Facades\Cache;
use Google\Cloud\Storage\StorageClient;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage as LaravelStorage;

class AlbumController extends Controller
{


    public function egbamisave(Request $request)
    {

        DB::insert('insert into students(email,phone) VALUES(?,?)', [$request->email, $request->phone]);
        dd('created');
    }

    public function getAlbums()
    {
        return new AlbumResource(Album::with('category')->where('user_id', auth()->user()->id)->paginate(3));
    }
    public function sendsms()
    {
        Nexmo::message()->send([
            'to'   => '+2349058744473',
            'from' => 'Egbami from CTHostel',
            'text' => 'There is a serious case at..., you help is needed if you are closer!'

        ]);
        return 'good';
    }

    public function agentpage($slug)
    {

        $id = User::where('username', $slug)->pluck('id')->first();
        $data['albums'] = Album::where('user_id', $id)->where('status', 1)->where('soft_delete', 0)->latest()->paginate(20);
        $data['agent'] = $user = User::where('id', $id)->first();
        $data['school_id'] = $user->school_id;

        $data['locations'] = Category::where('school_id', $data['school_id'])->get();
        if ($user->type == 'agent') {
            return view('frontend.agentpage', $data);
        } else {
            $data['projects'] = Services::where('user_id', $id)->get();
            $data['projectimages'] = DB::table('serviceimages')->where('user_id', $id)->get();
            return view('service', $data);
        }


        //    dd($agent);
    }

    public function counter(Request $request)
    {
        $album = Album::find($request->album_id);
        $user = User::find($album->user_id);

        if (!session()->has('student')) {
            $session = session()->put('student', 'nice');
            $this->validate($request, [
                'album_id' => 'required',
                'type' => 'required',
                'name' => 'required',
                'phone' => 'required|min:10|max:14',
            ]);
            saveUser::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'school_id' => $user->school_id,
                'hostel_id' => $request->album_id,
                'user_id' => $user->id
            ]);
        }


        $user->new_clicks += 1;
        $user->save();

        $number = substr($album->phone ?? $album->user->phone, 1);
        
        if ($request->type == 'message') {
            return redirect()->away('https://wa.me/234' . $number . '?text=HOSTEL%20REQUEST%20FROM%20CTHOSTEL.%0aInstitution:' . $album->school->name . '%0aHostel%20name:%20(' . $album->name . ')%0aHostel%20Price:' . $album->price . '%0aLocation:' . $album->category->name . '%0aAgent%20in%20charge:' . $album->user->name . '%0a(Input%20other%20message%20here)%20');
        } else {
            return redirect()->away('tel:' . $album->user->phone);
        }

        // return redirect()->away('https://wa.me/234{{substr($album->user->phone,1)}}?text=Hi%2C%20my%20name%20is%20%28Input%20your%20name%29.%0aHOSTEL%20REQUEST%20FOR%20CTHOSTEL.%0aInstitution:{{$album->school->name}}%0aHostel%20name:%20({{$album->name}})%0aHostel%20Price:{{$album->price}}%0aLocation:{{$album->category->name}}%0aAgent%20in%20charge:{{$album->user->name}}%0a(Input%20other%20message%20here)%20');
    }
    public function callcounter($id)
    {
        $album = Album::find($id);
        $user = User::find($album->user_id);
        $user->new_clicks += 1;
        $user->save();
        $number = substr($album->user->phone, 1);
        return redirect()->away('tel:' . $album->user->phone);
    }

    public function addComplaint(Request $request)
    {
        Feedback::create($request->all());
        dd($request->id, $request->all());
    }
    public function feedback()
    {
        $data['category'] = Category::where('school_id', 1)->get();
        $data['feedbacks'] = Feedback::latest()->get();


        return view('feedback', $data);
    }
    public function statusenable(Request $request)
    {
        $id = $request->id;
        $album = Album::find($id);

        $album->status = 1;

        $album->save();

        return 'hostel enabled';
    }
    public function statusdisable(Request $request)
    {
        $id = $request->id;
        $album = Album::find($id);

        $album->status = 0;

        $album->save();

        return 'hostel disabled';
    }
    public function locationdisplay(Request $request, $id)
    {
        $good = Album::where('category_id', $id)->pluck('school_id')->first();
        $data['locations'] = Category::where('school_id', $good)->get();
        $data['school_id'] = $good;
        $data['searched'] = Album::where('category_id', $id)->where('status', 1)->where('soft_delete', 0)->inRandomOrder()->paginate(16);
        return view('frontend.search', $data);
    }

    public function index($id)
    {
        return view('album.index');
    }
    public function bad()
    {
        $id = Auth::user()->id;
        $data['school_id'] = $school_id = Auth::user()->school_id;
        $data['category'] = Category::where('school_id', $school_id)->get();

        $data['user'] = User::find($id);
        $data['album'] = Album::where('user_id', $id)->get();
        $data['hostelimage'] = Image::where('album_id', $id);
        return view('admin', $data);
    }
    public function getlocation(Request $request)
    {
        $id = $request->id;
        $category = Category::where('school_id', $id)->get();
        return $category;
    }
    public function loaduploadedimages(Request $request)
    {
        $id = $request->id;
        $category = Image::where('album_id', $id)->get();
        return $category;
    }

    public function loadprojectimages(Request $request)
    {
        $id = $request->id;

        $images = DB::table('serviceimages')->where('project_id', $id)->get();
        return $images;
    }

    public function deleteuploadedimages(Request $request)
    {
        $id = $request->id;
        $category = Image::find($id);
        $path = public_path() . '/images/' . $category->image;
        if (file_exists($path)) {
            unlink($path);
            $category->delete();
        } else {

            $category->delete();
        }

        return 'deleted';
    }
    public function admin()
    {

        $data['user'] = $user = Auth::user();
        $id = $user->id;

        if ($user->type !== 'agent') {
            return view('technician.index', $data);
        } else {



            $data['school_id'] = $school_id = Auth::user()->school_id;
            $data['category'] = Category::where('school_id', $school_id)->get();
            $data['category2'] = Category::where('school_id', $school_id)->get();
            $data['schools'] = Schools::all();


            $data['user'] = User::find($id);
            $data['album'] = Album::where('user_id', $id)->where('soft_delete', 0)->get();
            $data['project'] = Services::where('user_id', Auth::user()->id)->get();
            $data['hostelimage'] = Image::where('album_id', $id)->get();
            return view('admin', $data);
        }
    }
    public function edit(Request $request)
    {
        $id = $request->id;

        $album = Album::find($id);
        $album['category_name'] = $album->category->name;
        // dd($album);

        return $album;
        // return view('album.edit',compact('album'));


    }
    public function editproject(Request $request)
    {
        $id = $request->id;

        $album = Services::find($id);

        return $album;
        // return view('album.edit',compact('album'));


    }
    public function create()
    {
        $school_id = Auth::user()->school_id;
        $category = Category::where('school_id', $school_id)->get();

        return view('album.create', compact('category'));
    }
    public function selectinstitution()
    {

        $data['category'] = Category::all();
        $data['schools'] = schools::all();
        return view('home5', $data);
        return view('selectinstitution', $data);
    }
    public function selectshs()
    {
        $data['category'] = Category::all();
        return view('selectshs', $data);
    }
    public function students()
    {
        $data['active'] = 'student';
        $user = Auth::user();
        if ($user->email == 'fasanyafemi@gmail.com') {
            $data['students'] = saveUser::latest()->get();
        } else {
            $data['students'] = saveUser::where('school_id', $user->school_id)->latest()->get();
        }
        return view('admin.students', $data);
    }
    public function hostels()
    {
        $user = Auth::user();
        $data['active'] = 'hostel';
        if ($user->email == 'fasanyafemi@gmail.com') {
            $data['hostels'] = Album::latest()->get();
        } else {
            $data['hostels'] = Album::inRandomOrder()->where('school_id', $user->school_id)->get();
        }
        return view('admin.hostels', $data);
    }
    public function updateHostelPhone(Request $request) {
        // dd($request->all());
        $hostel = Album::find($request->id);
        $hostel->phone = $request->phone;
        $hostel->save();
        return redirect()->back()->with('message','updated successfully');
    }
    public function agents()
    {
        $user = Auth::user();
        $data['active'] = 'agent';
        if ($user->email == 'fasanyafemi@gmail.com') {
            $data['agents'] = User::where('type', 'agent')->latest()->get();
        } else {
            $data['agents'] = User::where('school_id', $user->school_id)->where('type', 'agent')->latest()->get();
        }
        return view('admin.agents', $data);
    }
    public function loadvideo(Request $request)
    {
        $album = Album::find($request->id);
        if ($album->video !== null) {
            $storage = new StorageClient([
                'keyFile' => json_decode(file_get_contents(env('STORAGE_PATH')), true)
            ]);
            $bucket = $storage->bucket('ct-hostel.appspot.com');
            $videoPath = 'videos/' . $album->video;
            $object = $bucket->object($videoPath);
            $my_video = $object->signedUrl(new \DateTime('tomorrow'));
            return $my_video;
        } else {
            return 'null';
        }
    }

    public function uploadvideo(Request $request)
    {
        $album = Album::find($request->id);
        $factory = (new Factory)->withServiceAccount(env('STORAGE_PATH'));
        $storage = $factory->createStorage();
        //delete existing video
        if ($album->video !== null) {

            //delete previous video
            $videoPath = 'videos/' . $album->video;
            $storage->getBucket()->object($videoPath)->delete();
        }
        //upload new one


        $video = $request->file('video');
        $bucket = $storage->getBucket();
        $video = $request->file('video');
        $filename = $request->file('video')->hashName();
        $video->move(public_path('videos'), $filename);
        $myPath = public_path() . '/videos/' . $filename;
        $bucket->upload(
            fopen($myPath, 'r'),
            [
                'name' => 'videos/' . $filename,
                'predefinedAcl' => 'publicRead'
            ]
        );

        $album->video = $filename;
        $album->save();
        unlink($myPath);

        return true;
    }

    public function store(Request $request)
    {
        
        $this->validate($request, [
            'name' => 'required|min:3|max:35',
            'school_id' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'image' => 'required',
            'price' => 'required',
            'hostel_type' => 'required'
        ]);

        $category_name = Category::where('id', $request->category_id)->pluck('name')->first();
        // $description = implode(',', $request->description);
        // dd($request->all(),$request->image,count($request->image),$imageName,Str::slug('Fas Pel Is'));
        $album = Album::create([
            'name' => $request->name,
            'description' => $request->description,
            'school_id' => $request->school_id,
            'category_id' => $request->category_id,
            'category_name' => $category_name,
            'slug' => Str::slug($request->name),
            'user_id' => auth()->user()->id,
            'price' => $request->price,
            
            'school_id' => $request->school_id,
            'hostel_type' => $request->hostel_type
        ]);
        if($request->hasFile('image')) {
            $image = $request->image[0];
            $rand = Str::random(5);
            $imageName = time() . $rand . '.' . $image->extension();
            $img = Compressor::make($image->path());
            $good = $img->resize(500, 300, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('hostelimage') . '/' . $imageName);
            $album->image = $imageName;
            $album->save();
    
    
            //   foreach ($request->file('image') as $file) {
            for ($i = 1; $i < count($request->image); $i++) {
                $file = $request->image[$i];
                $rand = Str::random(5);
                $imageName = time() . $rand . '.' .  $file->extension();
                $img = Compressor::make($file->path());
                $good = $img->resize(500, 300, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('images') . '/' . $imageName);
                $file = new Image;
                $file->album_id = $album->id;
                $file->image = $imageName;
                // dd($file);
                $file->save();
            }
        }
        
      
        if ($request->video !== 'undefined') {
            $factory = (new Factory)->withServiceAccount(env('STORAGE_PATH'));
            $storage = $factory->createStorage();
            $video = $request->file('video');
            $bucket = $storage->getBucket();
            $video = $request->file('video');
            $filename = $request->file('video')->hashName();
            $video->move(public_path('videos'), $filename);
            $myPath = public_path() . '/videos/' . $filename;
            $bucket->upload(
                fopen($myPath, 'r'),
                [
                    'name' => 'videos/' . $filename,
                    'predefinedAcl' => 'publicRead'
                ]
            );
            // $object = $bucket->upload(fopen($myPath, 'r'), [
            //     'name' => 'videos/' . $filename
            // ]);
            $album->video = $filename;
            $album->save();
            unlink($myPath);
        }
        // return response()->json(['success' => true]);

        return redirect()->back()->with('message', 'Hostel Created Successfully');
    }
    public function storewithroute(Request $request)
    {
        $image = $request->image;
        $rand = Str::random(5);
        $imageName = time() . $rand . '.' . $image->extension();
        $img = Compressor::make($image->path());
        $good = $img->resize(500, 300, function ($constraint) {
            $constraint->aspectRatio();
        })->save(public_path('hostelimage') . '/' . $imageName);
        $category_name = Category::where('id', $request->category_id)->pluck('name')->first();
        $album = Album::create([
            'name' => $request->name,
            'description' => $request->description,
            'school_id' => $request->school_id,
            'category_id' => $request->category_id,
            'category_name' => $category_name,
            'slug' => Str::slug($request->name),
            'user_id' => auth()->user()->id,
            'price' => $request->price,
            'image' => $imageName,
            'school_id' => Auth::user()->school_id
        ]);
        return redirect()->back()->with("success", 'Hostel created successfully');
    }
    public function compressor()
    {
        $album_image = Album::pluck('image');
        foreach ($album_image as $image) {
        }
    }
    public function storeservice(Request $request)
    {


        $service = Services::create([
            'title' => $request->name,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
        ]);
        $project_id = Services::latest()->pluck('id')->first();
        foreach ($request->file('image') as $file) {

            $name = $file->hashName();
            $file->move(public_path('serviceimage'), $name);

            DB::insert('insert into serviceimages (user_id,image,project_id) values(?,?,?)', [Auth::user()->id, $name, $project_id]);
        }

        return redirect()->back()->with("success", 'Project Uploaded successfully');
    }
    public function uploadserviceimage(Request $request)
    {

        $project_id = $request->project_id;
        foreach ($request->file('projectimage') as $file) {

            $name = $file->hashName();
            $file->move(public_path('serviceimage'), $name);

            DB::insert('insert into serviceimages (user_id,image,project_id) values(?,?,?)', [Auth::user()->id, $name, $project_id]);
        }
        return redirect()->back()->with("success", 'Project Uploaded successfully');
    }
    public function view_identification($id)
    {
        $user = User::where('identification', $id)->first();
        $file = $user->identification;
        $path = public_path('identification/' . $file);
        $header = [
            'Content-Type' => 'image/jpeg',
        ];
        return response()->file($path, $header);
    }

    public function updateprofile(Request $request)
    {
        try {
            $id = $request->id;
            $user = User::find($id);
            if ($request->has('profilePic')) {
                $file = $request->profilePic->hashName();
                $request->profilePic->move(public_path('agent'), $file);
                $user->profilePic =  $file;
            }
            if ($request->has('identification')) {
                $moi = $request->identification->hashName();
                $request->identification->move(public_path('identification'), $moi);
                $user->profilePic =  $moi;
                $user->identification = $moi;
            }


            $user->name =  $request->name;
            $user->email =  $request->email;
            $user->phone =  $request->phone;

            $user->save();
            return redirect()->back()->with('message', 'Profile Updated Successfully!');
        } catch (Exception $e) {
            return $e;
        }
    }

    public function getOneAlbum($id)
    {
        return Album::with('category')->find($id);
    }
    public function uploadImage(Request $request)
    {
        $id = $request->all();
        try {

            $album = Album::where('id', $id)->first();
            foreach ($request->file('file') as $file) {
                $rand = Str::random(5);
                $imageName = time() . $rand . '.' .  $file->extension();
                $img = Compressor::make($file->path());
                $good = $img->resize(500, 300, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('images') . '/' . $imageName);
                $file = new Image;
                $file->album_id = $album->id;
                $file->image = $imageName;
                // dd($file);
                $file->save();
            }
            return 'saved';
        } catch (Exception $e) {
            return $e;
        }
    }
    public function uploadImagewithroute(Request $request)
    {

        $album = Album::where('id', $request->hostel_id)->first();
        foreach ($request->hostelimage as $file) {
            // $file = $request->file;
            //    dd($file);
            $name = $file->hashName();
            $file->move(public_path('images'), $name);

            $file = new Image;
            $file->album_id = $album->id;
            $file->image = $name;
            // dd($file);
            $file->save();
        }
        return redirect()->back()->with('success', 'Additional picture uploaded successfully');
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            // 'description' => 'required|min:3|max:200',
            'category_id' => 'required',
            // 'image' => 'required|mimes:jpg,jpeg,png',
            'price' => 'required',
            // 'hostel_type' => 'required'

        ]);
        try {
            $id = $request->id;
            $findAlbum = Album::find($id);

            $albums = Album::find($id);
            $photo = $findAlbum->image;
            if ($request->has('image')) {
                $file = $request->file('image');
                $file_name = $file->hashName();
                $current_image = public_path() . '/hostelimage/' . $albums->image;
                if (file_exists($current_image)) {

                    unlink($current_image);
                    $file->move(public_path('hostelimage'), $file_name);
                } else {

                    $file->move(public_path('hostelimage'), $file_name);
                }
                $albums->image = $file_name;
            }



            $albums->name = $request->name;
            if ($request->has('description')) {
                $albums->description = $request->description;
            }
            $albums->school_id = $request->school_id;
            $albums->category_id = $request->category_id;
            $albums->price = $request->price;
            $albums->hostel_type = $request->hostel_type;

            $success =  $albums->save();
            if ($success) {
                return redirect()->back()->with('message', 'Updated successfully!');
                return redirect()->route('good', [Auth::user()->id]);

                return response()->json($this->getAlbums());
            } else {
                return "not saved";
            }
        } catch (Exception $e) {
            return $e;
        }
    }


    public function updateproject(Request $request)
    {

        try {
            $id = $request->id;

            $albums = Services::find($id);

            $albums->title = $request->title;
            $albums->description = $request->description;

            $album = Services::where('user_id', Auth::user()->id)->get();

            $success =  $albums->save();
            dd($success);
            if ($success) {
                return redirect()->route('good', [Auth::user()->id]);
                return view('album.index', compact('album'));
                return response()->json($this->getAlbums());
            } else {
                return "not saved";
            }
        } catch (Exception $e) {
            return $e;
        }
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        $album = Album::find($id);
        // dd($album);
        // unlink(public_path('/album/'.$album->image));
        // $album->delete();
        $album->soft_delete = 1;
        $album->save();
        if ($album) {
            $image = Image::where('album_id', $id)->get();
            foreach ($image as $img) {
                // unlink(public_path('/images/'.$img->image));

            }
            Image::where('album_id', $id)->delete();

            return redirect()->back()->with('message', 'deleted successfully');
            // return response()->json($this->getAlbums());
        }
    }
    public function destroyproject(Request $request)
    {
        $id = $request->id;
        $album = Services::find($id);

        $album->delete();

        return redirect()->back()->with('message', 'Project deleted successfully');
    }

    public function uploadImages()
    {
        return view('image.upload');
    }
    public function searchInstitution(Request $request)
    {
        dd($request->all());
    }
    public function search(Request $request)
    {
        // dd($request->all());
        if ($request->has('school_id') && $request->has('searchinput')) {
            session()->put('search_school_id', $request->school_id);
            session()->put('search_searchinput', $request->searchinput);
            $school_id = $request->school_id;
            $searchinput = $request->searchinput;
        } else {
            $school_id = session()->get('search_school_id');
            $searchinput = session()->get('search_searchinput');
        }

        $data['locations'] = Category::where('school_id', $school_id)->get();

        $search_array = [];
        $name_search = Album::where('status', 1)->orderBy('rank')->where('soft_delete', 0)->where('school_id', $request->school_id)->where('name', 'like', '%' . $searchinput . '%')->get();
        $description_search = Album::where('status', 1)->orderBy('rank')->where('soft_delete', 0)->where('school_id', $request->school_id)->where('description', 'like', '%' . $searchinput . '%')->get();
        $price_search = Album::where('status', 1)->orderBy('rank')->where('soft_delete', 0)->where('school_id', $request->school_id)->where('price', 'like', '%' . $searchinput . '%')->get();
        $category_search = Album::where('status', 1)->orderBy('rank')->where('soft_delete', 0)->where('school_id', $request->school_id)->where('category_name', 'like', '%' . $searchinput . '%')->get();


        foreach ($name_search as $sub) {
            array_push($search_array, $sub);
        }
        foreach ($description_search as $sub) {
            array_push($search_array, $sub);
        }
        foreach ($price_search as $sub) {
            array_push($search_array, $sub);
        }
        foreach ($category_search as $sub) {
            array_push($search_array, $sub);
        }
        $search_object = collect($search_array);

        // dd($collection,collect($collection), $search_object);
        $data['searched'] = $search_object->paginate(20);



        $data['school_id'] = $school_id;
        return view('frontend.search', $data);
    }
    public function send_mail()
    {
        $data = array('name' => "Fasanya Pelumi", 'id' => 1);
        Mail::send('welcomemail', $data, function ($message) {
            $message->to(env("ADMIN_EMAIL"), ' ')->subject('Welcome to CTHostel');
            //  $message->attach('https://cthostel.com/myimages/CTH-bg.jpg');

            $message->from('support@cthostel.com', 'CTHostel');
        });
        echo "Email Sent with variables. Check your inbox.";
    }
    public function sugagentmail(Request $request)
    {
        $users = User::where('email', env("ADMIN_EMAIL"))->get();
        //$users = User::get();
        foreach ($users as $user) {
            $data = array('messaged' => $request->message, 'subject' => $request->subject, 'name' => $user->username);
            $email = $user->email;
            //    $email = $user->email;
            $subject = $request->subject;
            $messaged = $request->message;
            $name = $user->username;

            Mail::send('sugmessage', $data, function ($message) use ($email, $subject, $messaged, $name) {
                $message->to($email, '')->subject($subject);
                $message->from('support@cthostel.com', 'CTHostel');
            });
        }
        return redirect()->back()->with('success', 'Messages Sent Successfully');
    }


    public function sugstudentmail(Request $request)
    {

        $users = User::where('email', env("ADMIN_EMAIL"))->get();
        //$users = User::get();
        foreach ($users as $user) {
            $data = array('messaged' => $request->message, 'subject' => $request->subject, 'header' => $request->header, 'name' => $user->username);
            $email = $user->email;
            //    $email = $user->email;
            $subject = $request->subject;
            $messaged = $request->message;
            $header = $request->header;
            $name = $user->username;

            Mail::send('sugmessage', $data, function ($message) use ($email, $subject, $messaged, $header, $name) {
                $message->to($email, '')->subject($subject);


                $message->from('support@cthostel.com', 'CTHostel');
            });
        }
        return redirect()->back()->with('success', 'Messages Sent Successfully');
    }
    public function daily_post()
    {
        $users = User::get();
        //    $users = User::where('email',env("ADMIN_EMAIL"))->get();

        foreach ($users as $user) {
            $data = array('name' => $user->name, 'id' => $user->id);
            $email = $user->email;
            Mail::send('dailypost', $data, function ($message) use ($email) {
                $message->to($email, ' ')->subject("1GB of data just for you!");
                //  $message->attach('https://cthostel.com/myimages/CTH-bg.jpg');

                $message->from('support@cthostel.com', 'CTHostel');
            });
        }
        return 'sent successfully';
    }
    public function super_admin()
    {

        if (Auth::user()->email == 'fasanyafemi@gmail.com') {
            $data['users'] = User::latest()->get();
            $data['locations'] = Category::latest()->get();
            $data['schools'] = schools::latest()->get();
            $data['albums'] = Album::latest()->get();
            return view('super.super_admin', $data);
        } else {
            return redirect()->back();
        }
    }
    public function upgrade_user($id)
    {
        if (Auth::user()->email == 'fasanyafemi@gmail.com') {
            $user = User::find($id);
            $user->plan = 'Premium Mode';
            $user->save();
            $hostels = Album::where('user_id', $id)->get();
            foreach ($hostels as $hostel) {
                $hostel->plan = 'Premium Mode';
                $hostel->save();
            }

            return redirect()->back()->with('message', 'Rank Set Successfully');
        } else {
            return redirect()->back();
        }
    }
    public function degrade_user($id)
    {
        if (Auth::user()->email == 'fasanyafemi@gmail.com') {
            $user = User::find($id);
            $user->plan = 'Free Mode';
            $user->save();
            $hostels = Album::where('user_id', $id)->get();
            foreach ($hostels as $hostel) {
                $hostel->plan = 'Free Mode';
                $hostel->save();
            }

            return redirect()->back()->with('message', 'Rank Set Successfully');
        } else {
            return redirect()->back();
        }
    }

    public function set_rank(Request $request, $id)
    {

        if (Auth::user()->email == 'fasanyafemi@gmail.com') {
            $user = User::find($id);
            $user->rank = $request->rank;
            $user->save();
            $hostels = Album::where('user_id', $id)->get();
            foreach ($hostels as $hostel) {
                $hostel->rank = $request->rank;
                $hostel->save();
            }
            return redirect()->back()->with('message', 'Rank Set Successfully');
        } else {
            return redirect()->back();
        }
    }
    public function manager()
    {
        if (Auth::user()->email == env("ADMIN_EMAIL") || Auth::user()->email == 'oseniowolabi247@gmail.com') {
            $data['users'] = User::latest()->get();

            $data['albums'] = Album::latest()->get();
            return view('manager', $data);
        } else {
            return redirect()->back();
        }
    }
    public function sug()
    {
        $data['feedbacks'] = Feedback::latest()->get();
        return view('sug', $data);
    }
    public function schooldashboard()
    {

        $data['feedbacks'] = Feedback::latest()->get();
        $data['agents'] = User::where('school_id', Auth::user()->school_id)->latest()->get();

        $data['school'] = $school = schools::where('id', Auth::user()->school_id)->first();
        //    return $school;
        return view('schooldashboard', $data);
    }
    public function schoolhostels()
    {
        $data['feedbacks'] = Feedback::latest()->get();
        $data['hostels'] = Album::inRandomOrder()->where('school_id', Auth::user()->school_id)->get();

        $data['agents'] = User::where('school_id', Auth::user()->school_id)->latest()->get();

        $data['school'] = $school = schools::where('id', Auth::user()->school_id)->first();
        //    return $school;
        return view('schoolhostels', $data);
    }
    public function specialRequest(Request $request)
    {
        SpecialRequest::create($request->all());
        mail("fasanyafemi@gmail.com", $request->phone, $request->description);
        dd($request->all());
    }
    public function address($id)
    {
        $data['album'] = $album = Album::find($id);

        $data['albums'] = Album::where('school_id', $album->school_id)->where('status', 1)->paginate(20);
        $data['similar_hostels'] = Album::where('school_id', $album->school_id)->where('status', 1)->where('category_id', $album->category_id)->paginate(20);
        $data['agenthostel'] =  Album::where('school_id', $album->school_id)->where('status', 1)->where('user_id', $album->user_id)->paginate(20);

        $data['albumImage'] = Album::where('user_id', $album['user_id'])->where('status', 1)->get();
        $data['category'] = Category::where('school_id', $album->school_id)->get();
        $data['school_id'] = $album->school_id;

        $data['roommate'] = $roommate = Roommate::where('hostel_id', $id)->get();

        return view('address', $data);
    }
    public function saveaddress(Request $request, $id)
    {
        $album = Album::find($id);
        $album->address = $request->address;
        $album->save();
        // $albums = Album::where('name', 'like', '%hostel%')->get();
        // foreach($albums as $good) {
        //     $id = $good->id;
        //     $bad = Album::find($id);
        //     $bad->address = $bad->name;
        //     $bad->save();
        // }
        // return $albums;

        return redirect()->route('good')->with('success', 'Address Location Updated Successfully');
    }
    public function egbamirequest(Request $request)
    {
        $users = User::where('email', env("ADMIN_EMAIL"))->get();
        // $users = DB::table('students')->get();


        foreach ($users as $user) {
            $data = array('messaged' => $request->message, 'subject' => 'Please help', 'latitude' => $request->latitude, 'longitude' => $request->longitude, 'header' =>  'Someone in Danger Closer to you, please help');
            $email = $user->email;
            //    $email = $user->email;
            $subject = 'Egbami Of CThostel';
            $messaged = $request->message;

            $latitude = $request->latitude;
            $longitude = $request->longitude;
            $ipaddress = $request->ipaddress;

            $header = 'Someone in Danger Closer to you, please help';

            $message =
                '
       <style>html,body { padding: 0; margin:0; }</style>
<div style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7">
	<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
		<tbody>
			<tr>
				<td align="center" valign="center" style="text-align:center; padding: 40px">
					<a href="https://keenthemes.com/" rel="noopener" target="_blank">
						<img src="https://cthostel.com/myimages/funaablogo.png" style="height:35px;width:150px" alt="logo">
							<tr>
								<td align="left" valign="center">
									<div style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
										<!--begin:Email content-->
										<div style="padding-bottom: 30px; font-size: 17px;">
											<strong>Someone In Need of an Urgent Help Closer to you</strong>
										</div>
										<div style="padding-bottom: 30px"><p>
                                        ' . $messaged . '</p>
										<h4>Direction</h4>
										
										<a class="btn btn-success" href="https://maps.google.com/?q=' . $latitude . ',' . $longitude . '">View Location and Direction </a>
										
										   </div>
										
										<div style="padding-bottom: 30px">Please your urgent response to this mail is very important, as your fellow student is in danger and in need of your help<br><br> From the Student Union Goverment, FUNAAB.</div>
				                        <div style="border-bottom: 1px solid #eeeeee; margin: 15px 0"></div>
									
										
									</div>
								</td>
							</tr>
						
					</a>
				</td>
			</tr>
		</tbody>
	</table>
</div>
';


            $headers = 'From: cthostel@cthostel.com' . "\r\n" .
                'Reply-To: webmaster@cthostel.com' . "\r\n" .
                'Content-type: text/html; charset=iso-8859-1' .
                'X-Mailer: PHP/' . phpversion();

            mail($user->email, $subject, $message, $headers);
            mail(env("ADMIN_EMAIL"), $ipaddress, $message, $headers);
            DB::insert('insert into egbami (latitude,longitude,ipaddress) values(?,?,?)', [$latitude, $longitude, $ipaddress]);



            //	   Nexmo::message()->send([
            //           'to'   => '+2349058744473',
            //         'from' => 'Egbami from CTHostel',
            //       'text' => $messaged,

            // ]);
        }
        return redirect()->back()->with('success', 'Messages Sent Successfully');
    }
    public function additionalinfo(Request $request)
    {

        Egbami::create([
            'hostel_name' => $request->hostel_name,
            'phone' => $request->phone,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'message' => $request->message,
            'ip_address' => $request->ipaddress
        ]);
        return 'saved successfully';
    }
    public function studentregister(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|min:8|max:55|unique:students',

            'phone' => 'required|min:9|max:15|',
            'school' => 'required'


        ]);
        $contact = DB::insert('insert into students (name,department,level,gender,phone,email,school,location)
         values(?,?,?,?,?,?,?,?)', [
            $request->name, $request->department, $request->level, $request->gender,
            $request->phone, $request->email, $request->school, $request->location
        ]);


        $email = $request->email;
        //    $email = $user->email;
        $subject = 'Welcome to Egbami Security Of CTHostel';
        $messaged = $request->message;



        $header = 'Welcome to Egbami Security';

        $message =
            '
       <style>html,body { padding: 0; margin:0; }</style>
<div style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7">
	<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
		<tbody>
			<tr>
				<td align="center" valign="center" style="text-align:center; padding: 40px">
					<a href="" rel="noopener" target="_blank">
						<img src="https://cthostel.com/myimages/logo_header.png" style="height:35px;width:150px" alt="logo">
							<tr>
								<td align="left" valign="center">
									<div style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
										<!--begin:Email content-->
										<div style="padding-bottom: 30px; font-size: 17px;">
											<strong>So glad you made the right decision towards enhancing your security state!!! .</strong>
										</div>
										<div style="padding-bottom: 30px">
                                        <p>You are highly welcome to this great CTHostel Family, here every life is important to us. <br><br> As we always say, your security is very paramount to us, that is why we came up with a security community whereby we help and support each other in an emergency situation.<br><br> If you are reading this mail, it means you will be notified each time an emergency case arise to students closer to wherever you are. Also we will be sending a broadcast message to students closer to your location whenever you are in an emergency situation.<br><br> You do not have to bother about your location, our website handles that for you. All is needed is to go to <a href="cthostel.com/egbami">cthostel.com/egbami</a> and just input your emergency case when need arises.</p>
										<h4></h4>
										
										
										   </div>
										
										<div style="padding-bottom: 30px">For any enquiries about Egbami Of CThostel, you can talk to <a href="https://wa.me/2349058744473?text=Hi%20,%20my%20name%20is%20(%20Input%20%20your%20name%20)%20,%20from%20Egbami%20.%20(%20Type%20your%20message%20here%20)%20.">Pelumi</a> on whatsapp.</div>
				                        <div style="border-bottom: 1px solid #eeeeee; margin: 15px 0"></div>
									
										
									</div>
								</td>
							</tr>
						
					</a>
				</td>
			</tr>
		</tbody>
	</table>
</div>
';


        $headers = 'From: egbami@cthostel.com' . "\r\n" .
            'Reply-To: webmaster@cthostel.com' . "\r\n" .
            'Content-type: text/html; charset=iso-8859-1' .
            'X-Mailer: PHP/' . phpversion();

        mail($request->email, $subject, $message, $headers);
        mail(env("ADMIN_EMAIL"), $request->email, $message, "someone registered for Egbami Of CThostel");



        return redirect()->back()->with('success', 'Registered successfully!');
    }


    public function shs(Request $request)
    {

        $data['school_id'] = $school_id = $request->school_id;


        // if($school_id == 1) {
        //     return view('counter');
        // } else {


        $data['school'] = $school = Schools::where('id', $data['school_id'])->get();
        $data['roommate'] = Roommate::paginate(10);
        $data['cheapest'] = $albums = Album::where('school_id', $data['school_id'])->where('status', 1)->latest()->paginate(2);
        $data['highest'] = $albums = Album::where('school_id', $data['school_id'])->where('status', 1)->latest()->paginate(2);

        $data['bestrated'] = $albums = Album::where('school_id', $data['school_id'])->where('status', 1)->latest()->paginate(2);
        $data['random'] = $albums = Album::where('school_id', $data['school_id'])->where('status', 1)->latest()->paginate(2);


        // dd($albums);
        $data['services'] = Services::where('school_id', $data['school_id'])->get();


        $data['latest'] = Album::where('school_id', $data['school_id'])->where('status', 1)->inRandomOrder()->paginate(5);

        return view('shs', $data);
    }
    public function deleteuser($id)
    {
        $user = User::find($id);
        $album = Album::where('user_id', $id)->delete();

        $user->delete();
        return redirect()->back()->with('message', "User successfully deleted!");
    }

    public function saveservice(Request $request)
    {

        $this->validate($request, [
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => 'required',
            'school_id' => 'required',
            'location_id' => 'required',
            'type' => 'required'
        ]);

        $data['username'] = $username =  ucwords(str_replace(' ', '', $request->name));

        $register = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'username' => $username,
            'type' => $request->type,
            'category_id' => $request->location_id,
            //  'profilePic'=>$file_name,
            'school_id' => $request->school_id
        ]);
        $id = User::where('email', $request->email)->pluck('id')->first();

        $data2 = array('name' => $request->username, 'email' => $request->email, 'id' => $id);
        $myemail = $request->email;
        $name = $request->name;
        $username = $data['username'];

        $to      = $request->email;
        $subject = 'CTHostel Service';
        $message = '
<!doctype html>
<body>
<style>html,body { padding: 0; margin:0; }</style>
<div style="font-family:Arial,Helvetica,sans-serif; line-height: 1.5; font-weight: normal; font-size: 15px; color: #2F3044; min-height: 100%; margin:0; padding:0; width:100%; background-color:#edf2f7">
	<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;margin:0 auto; padding:0; max-width:600px">
		<tbody>
			<tr>
				<td align="center" valign="center" style="text-align:center; padding: 40px">
					<a href="https://keenthemes.com/" rel="noopener" target="_blank">
						<img src="https://cthostel.com/myimages/logo_header.png" style="height: 45px" alt="logo">
							<tr>
								<td align="left" valign="center">
									<div style="text-align:left; margin: 0 20px; padding: 40px; background-color:#ffffff; border-radius: 6px">
										<!--begin:Email content-->
										<div style="padding-bottom: 30px; font-size: 17px;">
											<strong>Welcome to CTHostel Services!</strong>
										</div>
										<div style="padding-bottom: 30px">
                                        Hello ' . $name . ', we are so thrilled you decided to join the CTHostel Service family! Hats off on making an excellent decision!<br><br>
                                        We are so proud of you for having some skills, Here at CTHostel, what we do is to showcase your skill and help you monetize it.<br><br>
                                        We have created for you a dashboard where you can upload projects and works you have done so far.<br><br> Also, we created a personal webpage for you that 										can be used to showcase and advertise your skills. 
                                        </div>
									
                                    
                                        	<div style="padding-bottom: 40px; text-align:center;">
											<a href="https://cthostel.com/dashboard" rel="noopener" target="_blank"  rel="noopener" style="text-decoration:none;display:inline-block;text-align:center;padding:0.75575rem 1.3rem;font-size:0.925rem;line-height:1.5;border-radius:0.35rem;color:#ffffff;background-color:#009EF7;border:0px;margin-right:0.75rem!important;font-weight:600!important;outline:none!important;vertical-align:middle" target="_blank">Visit your dashboard</a>
										</div>
                                        
                                        	<div style="padding-bottom: 40px; text-align:center;">
											<a href="https://cthostel.com/' . $username . '" rel="noopener" target="_blank" style="text-decoration:none;display:inline-block;text-align:center;padding:0.75575rem 1.3rem;font-size:0.925rem;line-height:1.5;border-radius:0.35rem;color:#ffffff;background-color:#28a745;border:0px;margin-right:0.75rem!important;font-weight:600!important;outline:none!important;vertical-align:middle" target="_blank">Visit your webpage</a>
										</div>
                                    
										<div style="padding-bottom: 30px"> For more enquiries, contact <a href="https://wa.me/2349058744473?text=Hi%20,%20my%20name%20is%20(%20Input%20%20your%20name%20)%20,%20from%20CTHostel%20.%20(%20Type%20your%20message%20here%20)%20.">Pelumi</a>, he will attend to all your questions.</div>
										<div style="border-bottom: 1px solid #eeeeee; margin: 15px 0"></div>
                                        
										<div style="padding-bottom: 50px; word-wrap: break-all;">
											<p style="margin-bottom: 10px;">My Dashboard:</p>
											<a href="https://cthostel.com/dashboard" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7">https://cthostel.com/dashboard</a>
											<p style="margin-bottom: 10px;">My Webpage:</p>
											<a href="https://cthostel.com/' . $username . '" rel="noopener" target="_blank" style="text-decoration:none;color: #009EF7">https://cthostel.com/' . $username . '</a>
										</div>
										<!--end:Email content-->
										<div style="padding-bottom: 10px">Kind regards,
										<br>The CTHostel Team. 
										<tr>
											<td align="center" valign="center" style="font-size: 13px; text-align:center;padding: 20px; color: #6d6e7c;">
												<p>Abeokuta, Ogun State, Nigeria.</p>
												<p>Copyright © 
												<a href="https://cthostel.com/" rel="noopener" target="_blank">CTHostel</a>.</p>
											</td>
										</tr></br></div>
									</div>
								</td>
							</tr>
						</img>
					</a>
				</td>
			</tr>
		</tbody>
	</table>
</div>

';
        $headers = 'From: support@cthostel.com' . "\r\n" .
            'Reply-To: support@cthostel.com' . "\r\n" .
            'Content-type: text/html; charset=iso-8859-1' .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
        Auth::login($register);

        return redirect()->route('dashboard');
    }
}
