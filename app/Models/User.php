<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\Album;
use App\Models\schools;
use App\Models\Follower;
use App\Models\Category;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','school_id','username','type','category_id'
    ];
   	 
  public function category() {
    return $this->belongsTo(Category::class);
  }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
  public function school() {
    return $this->belongsTo(schools::class);
  }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // public function following(){
    //     return $this->belongsToMany(User::class,'followers','follower_id','following_id');
    // }

    // public function amIfollowing($userId){
    //     return \DB::table('followers')->where('follower_id',auth()->user()->id)->where('following_id',$userId)->exists();
    // }
   

}
