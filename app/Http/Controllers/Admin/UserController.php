<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Validation\Rule;

class UserController extends Controller {

    public function allUserList(Request $request, $branch) {
  
        $searchtext = $request->search;

        if (!empty($searchtext)) {
            $userList = User::where([['branch_id', $branch],['type','Staff']])
                    ->where(function($q) use($searchtext) {
                        $q->orWhere('name', 'LIKE', "%$searchtext%")
                        ->orWhere('email', 'LIKE', "%$searchtext%")
                        ->orWhere('phone', 'LIKE', "%$searchtext%");
                    })
                    ->paginate(20);
        } else {
            $userList = User::where([['branch_id', $branch],['type','Staff']])->paginate(20);
        }

        return view('admin.user.list', compact('userList','branch'));
    }

    public function showUser(User $user) {
        return view('admin.user.user', compact('user'));
    }

    public function updateUser(Request $request, User $user) {
        $request->validate([
            'name' => ['required',
                Rule::unique('users')->ignore($user->id), 'max:50'
            ],
            'email' => ['required',
                Rule::unique('users')->ignore($user->id), 'email'
            ]
        ]);

        $data = $request->all();

        if ($request->get('status')) {
            $data['status'] = "Active";
        } else {
            $data += ["status" => "Inactive"];
        }
        if ($request->get('email_verify')) {
            $data['email_verify'] = "1";
        } else {
            $data += ["email_verify" => "0"];
        }

        if ($request->get('sms_verify')) {
            $data['sms_verify'] = "1";
        } else {
            $data += ["sms_verify" => "0"];
        }
        $user->update($data);
        return back()->withSuccess("User information updated successfully");
    }

    public function allBannedUserList(Request $request) {

        $searchtext = $request->search;

        if (!empty($searchtext)) {
            $userList = User::where('status', 'Inactive')
                    ->where(function($q) use($searchtext) {
                        $q->orWhere('name', 'LIKE', "%$searchtext%")
                        ->orWhere('email', 'LIKE', "%$searchtext%")
                        ->orWhere('phone', 'LIKE', "%$searchtext%");
                    })
                    ->paginate(20);
        } else {
            $userList = User::where('status', 'Inactive')->paginate(20);
        }

        return view('admin.user.banned', compact('userList'));
    }

    public function allActiveUserList(Request $request) {

        $searchtext = $request->search;

        if (!empty($searchtext)) {
            $userList = User::where('status', 'Active')
                    ->where(function($q) use($searchtext) {
                        $q->orWhere('name', 'LIKE', "%$searchtext%")
                        ->orWhere('email', 'LIKE', "%$searchtext%")
                        ->orWhere('phone', 'LIKE', "%$searchtext%");
                    })
                    ->paginate(20);
        } else {
            $userList = User::where('status', 'Active')->paginate(20);
        }
        return view('admin.user.active', compact('userList'));
    }

}
