<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Model\GeneralSetting;
use Carbon\Carbon;
use helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Register Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users as well as their
      | validation and creation. By default this controller uses a trait to
      | provide this functionality without requiring any additional code.
      |
     */

use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        
        return Validator::make($data, [
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data) {

        return User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'phone' => $data['phone'],
                    'password' => Hash::make($data['password']),
                    
        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm() {
        $gs = GeneralSetting::first();

        if ($gs->registration_verification == 1) {

            return view('manager.register');
        } else {
            return redirect('login')->withErrors('Registration is temporary off now. Please try again later');
        }
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user) {

        if ($user->email_verify == 0) {
            
            $code = Str::random(6);
            
            //$user->code_send = Carbon::now()->addMinutes(2);
            $user->code  = $code;
            $user->save();
            
            $to = $user->email;
            
            $name = $user->name;
            
            $subject = 'Email Verification Code';
            
            $message = 'Here is your email verification code '.$code; 

           send_email($to, $name, $subject, $message);
            
            return redirect()->route('email.verify');
        }

        if ($user->sms_verify == 0) {
            
            $code = Str::random(6);
            
            $user->code_send = Carbon::now()->addMinutes(2);
            $user->code  = $code;
            $user->save();
            
            $to = $user->phone;
            $message = 'Here is your phone verification code '.$code; 

            send_sms($to, $message);
            
            return redirect()->route('sms.verify');
        }
    }

}
