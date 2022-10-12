<?php

namespace App\Models;
use App\Models\Album;
use Illuminate\Database\Eloquent\Model;

class roommate extends Model
{
    protected $fillable = [
        'name','phone','religion','gender','department','level','success','hostel_id','image','email'
    ];
    public function hostel() {
        return $this->belongsTo(Album::class);
    }
}
