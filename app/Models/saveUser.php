<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class saveUser extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'save_users';

    public function hostel() {
        return $this->belongsTo(Album::class);
    }
    public function school() {
        return $this->belongsTo(Schools::class);
    }
}
