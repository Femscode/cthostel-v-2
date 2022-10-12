<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Image;
use App\Models\User;
use App\Models\schools;
class Album extends Model
{
    protected $guarded =[];
    // protected $fillable = [
    //     'name','description','price','image','category_id','user_id','slug'
    // ];
    protected $table = 'albums';

    public function category(){
    	return $this->hasOne(Category::class,'id','category_id');

    }

    public function albumimages(){
    	return $this->hasMany(Image::class,'album_id','id');
    }
    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function school() {
        return $this->belongsTo(schools::class);
    }
   

        


    
}
