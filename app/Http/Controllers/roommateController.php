<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\roommate;
use App\Models\Category;
use App\Models\Album;
class roommateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['hostels'] = Album::where('school_id',1)->get();
        $data['category'] = Category::where('school_id',1)->get();
        $data['roommates'] = roommate::latest()->get();
        return view('roommate',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roommate.create');
    }

    /**
     * Store a newly created resource in storage.
     *r
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function hostelrequest($id) {
            $albums = Album::where('id',$id)->get();
            $album = $albums[0];
            return view('roommate.create',compact('album'));
            
    }
    public function storeroommate(Request $request) {
         
            //  $albums = Album::where('id',$id)->get();
            // $album = $albums[0];
            $hostel_id = $request->album_id;
            
             $this->validate($request,[
                 'name'=>'required',                
                 'phone'=>'required',                
                 'gender'=>'required',                
                 'department'=>'required',                
                 'level'=>'required',                
                 'religion'=>'required'           
             ]);
            //dd('here',$hostel_id);
            roommate::create([
                'name'=>$request->name,                
                'phone'=>$request->phone,                
                'gender'=>$request->gender,                
                'department'=>$request->department,                
                'level'=>$request->level,                
                'religion'=>$request->religion,
                'hostel_id'=>$hostel_id,
                
            ]);
            
            return redirect()->back()->with('success','Roomate request made Successfully');
            }
            public function testing(Request $request) {
                
                dd($request->all(),$request->file('image'));
            }
    public function store(Request $request)
    {
    $this->validate($request,[
        'name'=>'required',                
        'phone'=>'required',                
        'gender'=>'required',                
        'department'=>'required',                
        'level'=>'required',                
        'religion'=>'required'           
    ]);
    roommate::create([
        'name'=>$request->name,                
        'phone'=>$request->phone,                
        'gender'=>$request->gender,                
        'department'=>$request->department,                
        'level'=>$request->level,                
        'religion'=>$request->religion
    ]);
    return 'roommate created successfully';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roommate = roommate::get();
        return view('roommate.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
