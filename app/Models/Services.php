<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;
class Services extends Model
{
    protected $guarded = [];
    protected $table = 'services';
   
  public function category() {
        return $this->belongsTo(Category::class);
    }
  public function user() {
    return $this->belongsTo(User::class);
  }
}
