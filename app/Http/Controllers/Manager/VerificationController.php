<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use helpers;
use Illuminate\Support\Str;
use Carbon\Carbon;
use SebastianBergmann\Diff\Diff;

class VerificationController extends Controller {


    public function verifyEmail() {
        return view('manager/verification/email');
    }

    public function verifyCode(Request $request) {
        $code = $request->get('code');

        $user = User::where('code', $code)->first();

        if (empty($user)) {
            return back()->withErrors('Code not match. Please check again');
        } else {
            $user->email_verify = "1";
            $user->save();

            if ($user->sms_verify == 0) {
                $code = Str::random(6);

                $user->code_send = Carbon::now()->addMinutes(2);
                $user->code = $code;
                $user->save();

                $to = $user->phone;
                $message = 'Here is your sms verification code ' . $code;

                helpers::send_sms($to, $message);

                return redirect()->route('sms.verify')->withSuccess('Email verification done successfully');
            }
            return redirect()->route('home')->withSuccess('Email verification done successfully');
        }
    }

    public function verifySms() {
        return view('manager/verification/sms');
    }

    public function verifySmsCode(Request $request) {

        $code = $request->get('code');

        $user = User::where('code', $code)->first();

        if (empty($user)) {

            return back()->withErrors('Code not match. Please check again');
        } else {

            $user->sms_verify = "1";

            $user->save();

            return redirect()->route('home')->withSuccess('Sms verification done successfully');
        }
    }

    public function codeResend(User $user) {

        if (Carbon::now() < $user->code_send) {

            return back()->withErrors('Please wait 2 minutes');
        } else {
            if ($user->email_verify == 0) {

                $code = Str::random(6);

                $user->code_send = Carbon::now()->addMinutes(2);
                $user->code = $code;
                $user->save();

                $to = $user->email;

                $name = $user->name;

                $subject = 'Email Verification Code';

                $message = 'Here is your email verification code ' . $code;

                helpers::send_email($to, $name, $subject, $message);

                return redirect()->route('email.verify');
            }

            if ($user->sms_verify == 0) {
                $code = Str::random(6);

                $user->code_send = Carbon::now()->addMinutes(2);
                $user->code = $code;
                $user->save();

                $to = $user->phone;
                $message = 'Here is your email verification code ' . $code;

                helpers::send_sms($to, $message);

                return redirect()->route('sms.verify');
            }
        }
    }

}
