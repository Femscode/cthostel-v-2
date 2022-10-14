<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class RegisteredUserController extends Controller
{

    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // dd($request->all());



        $validator = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'address' => ['required'],

            'phone' => ['required', 'unique:users'],
            // 'state' => ['required'],

            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $uuid = Str::uuid();
        $username =  preg_replace('/\s+/', '', $request->name);
        $user = User::create([
            'name' => $request->name,
            'username' => $username,
            'email' => $request->email,
            'uuid' => $uuid,
            'type' => 'agent',
            'phone' => $request->phone,
            'school_id' => $request->school_id,
            'password' => Hash::make($request->password),
        ]);

        // event(new Registered($user));
        $email = $request->email;

        $data = array('name' => $request->name);
        Mail::send('mail.welcomemail', $data, function($message) use($email) {
            $message->to($email, '')->subject
               ('Welcome to CTtaste');
            $message->from('support@cttaste.com','Pelumi');
         });
        Auth::login($user);


        return redirect(RouteServiceProvider::HOME);
    }
    public function logout()
    {
        Auth::logout();
       // return Redirect::route('login');
       Session::flush();

        return Redirect::away('login');
    }
}
