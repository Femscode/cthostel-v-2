<?php

namespace App\Models;

use App\Models\Album;
use App\Models\schools;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class saveUser extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'save_users';

    public function hostel() {
        return $this->belongsTo(Album::class);
    }
    public function school() {
        return $this->belongsTo(schools::class);
    }
}
