<?php

namespace App\Http\Controllers\Staff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\User;
use Illuminate\Support\Str;
use helpers;

class PasswordResetController extends Controller {

    public function showLinkRequestForm() {
        return view('staff.passwords.email');
    }

    public function sendResetLink(Request $request) {

        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(60);
        $email = $request->get('email');
        DB::table('password_resets')->insert(
                ['email' => $email, 'token' => $token, 'created_at' => date("Y-m-d h:i:s")]
        );
        $user = User::where('email', $email)->first();
        $to = $user->email;
        $name = $user->name;
        $subject = 'Password Reset';
        $message = 'Use This Link to Reset Password: ' . url('/') . '/staff/password/reset/' . $token;

        send_email($to, $name, $subject, $message);

        return back()->withSuccess('Password reset link sent to your mail.');
    }

    public function resetLink($token) {

        $reset = DB::table('password_resets')->where('token', $token)->first();

        if (empty($reset) || $reset->status == 1) {
            return redirect()->route('login')->withError('Invalid Reset Link');
        } {
            return view('staff.passwords.reset', compact('reset'));
        }
    }

    public function passwordReset(Request $request) {

        $this->validate($request, [
            'email' => 'required|email',
            'token' => 'required',
            'password' => 'required|min:4|confirmed',
            'password_confirmation' => 'required',
        ]);

        $reset = DB::table('password_resets')->where('token', $request->token)->first();

        $user = User::where('email', $request->get('email'))->first();

        if (empty($reset) || empty($user) || $reset->status == 1) {

            return redirect()->route('staff')->withErrors('Invalid Reset Link');
        } else {

            $user->password = bcrypt($request->password);

            $user->save();

            DB::table('password_resets')->where('email', $user->email)->update(['status' => "1"]);

            $message = 'Password Changed Successfully';

            $to = $user->email;
            $name = $user->name;
            $subject = 'Password Reset';

            send_email($to, $name, $subject, $message);

            return redirect()->route('staff')->withSuccess('success', 'Password Changed');
        }
    }

}
