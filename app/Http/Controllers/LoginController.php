<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller {

    use AuthenticatesUsers;

    public function authenticate(Request $request) {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $admins_name = Input::get('name');
        $password = Input::get('password');
        //check authentication 
        if (Auth::guard('admin')->attempt(['name' => $admins_name, 'password' => $password])) {
            return redirect('admin/dashboard')->withSuccess('You are successfully logged in');
        } else {
            //logout
            Auth::guard('admin')->logout();
            return redirect()->back()->withInput()->withError('These credentials do not match our records.');
        }
    }

}
