Models\<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\schools;
use Illuminate\Support\Facades\Hash;

class CategoryController extends Controller
{
    public function getCategories(){

    	$categories = Category::get();
    	
    	return $categories;
    }
  	public function createSchool() {
      if(Auth::user()->email == 'fasanyafemi@gmail.com' ) {
      return view('createSchool');
        
      }
      else {
        return redirect()->back()->with('message','Access denied');
      }
    }
  	public function storeSchool(Request $request) {
      $request->validate([
        'name' => 'required',
        'image' => 'required'
      ]);
      $schoolimage = $request->image->hashName();
      schools::create([
        'name' => $request->name,
        'image' => $request->image->hashName()
      ]);
      return redirect()->back()->with('message','School created successfully');
      
    }
  
  
  public function createLocation() {
          if(Auth::user()->email == 'fasanyafemi@gmail.com' ) {

            return view('createlocation');}
    else {
      return redirect()->back()->with('message','Access denied');
    }
    }
  	public function storeLocation(Request $request) {
      $request->validate([
        'school_id' => 'required',
        'name' => 'required'
      ]);
      Category::create([
        'name' => $request->name,
        'school_id' => $request->school_id
      ]);
      return redirect()->back()->with('message','School created successfully');
      
    }
}
