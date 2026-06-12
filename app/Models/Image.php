<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
        protected $guarded = [];
        protected $table = 'images';

        //create a function for getting image attribute
        public function getImageAttribute($value)
        {
                if (!$value) {
                        return null;
                }

                if (env('APP_ENV') == 'local') {
                        return asset('images/' . $value);
                }

                return 'https://cthostel.com/cthostel_files/public/images/' . $value;
        }
}
