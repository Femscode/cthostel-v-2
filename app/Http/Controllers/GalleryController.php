<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Album;
use App\Models\User;
use App\Models\roommate;
use Illuminate\Support\Facades\Auth;



class GalleryController extends Controller
{
    public function create($id){
        $albumBelongsToUser = Album::where('user_id',auth()->user()->id)->where('id',$id)->exists();
        if($albumBelongsToUser){
            $album_id = $id;
            session()->put('id',$id);
            $image = Image::where('album_id',$id)->get();
          $user_id = Auth::user()->id;
           
            return view('image.create',compact('album_id','image','user_id'));

        } else {
            return redirect()->back();
        }
    }

    public function upload(Request $request){
        
        $this->validate($request,[

            'files'=>'required'
        ]);

        foreach($request->file('files') as $file){
            
            $name = $file->hashName();
    		$file->move(public_path('images'),$name);
            
    		$file = new Image;
            $file->album_id = $request->album_id;
           $file->image = $name;
    		$file->save();
        }        
        return redirect()->back()->with('message','Images Uploaded Successfully');

    	return response()->json(['success'=>'Your images successfully upload']);
    	
	}
    public function myupload($id,Request $request){
        $this->validate($request,[

            'files'=>'required'
        ]);
     $albums = Album::where('id',$id)->get();
     $album = $albums[0];
        foreach($request->file('files') as $file){
            
            $name = $file->hashName();
    		$file->move(public_path('images'),$name);
            
    		$file = new Image;
            $file->album_id = $album->id;
            $file->image = $name;
            $file->save();
        }
        return redirect()->back()->with('message','Images Uploaded Successfully');

    	return response()->json(['success'=>'Your images successfully upload']);
    	
	}
    public function images(){
        return Image::where('album_id',session()->get('id'))->get();
    }

  

    public function destroy($id){
        
        $image = Image::find($id);
        $image->delete();
        return redirect()->back()->with('message','Image deleted successfully');
    }

   
    public function viewAlbum($slug,$id){
      
       $albums = Album::with('albumimages')->where('slug',$slug)->where('id',$id)->get();
    
        $albumImage = Album::where('user_id',$albums[0]['user_id'])->get();
        
       if(\Auth::check()){
            $userId  = Album::where('id',$id)->first()->user_id;
            $follows = 'kokanmi';
        }
        $follows = 'good';
        $userId = 1;
        //(new User)->amIfollowing($userId);
        $roommate = roommate::where('hostel_id',$id)->get();
        // dd($roommate);
      
        return view('album.show',compact('albums','follows','userId','albumImage','roommate'));
    }





  

}
