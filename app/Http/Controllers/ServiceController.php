<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
   public function messagetechnician($phone) {
   $user =  User::where('phone',$phone)->first();
    $user->clicks += 1;
    $user->save();
   
       $number = substr($phone, 1);
       return redirect()->away('https://wa.me/234' . $number . '?text=Hi%2C%20my%20name%20is%20%28Input%20your%20name%29.%0a%20REQUEST%20FOR%20CTHOSTEL%20TECHNICIAN%20SERVICE.%0a(Input%20your%20location/address)');

   }
   public function calltechnician($phone) {
    $user =  User::where('phone',$phone)->first();
    $user->clicks += 1;
    $user->save();
   return redirect()->away('tel:'.$phone);
   }
}
