<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\User;
use Intervention\Image\Facades\Image;
use App\Model\Branch;
use App\Model\CourierInfo;
use Carbon\Carbon;

class AdminController extends Controller {

    /**
     * Function dashboard
     * This method is used for show dashboard page after successfully login
     * 
     * @access public
     * @return dashboard blade view page
     *
     * @last-modified 08/12/18
     */
    public function dashboard() {

        $user = User::all();
        $totalBranch = Branch::count();
        $totalManager = User::where([['type', 'Manager'], ['status', 'Active']])->count();
        $totalCompanyIncome = CourierInfo::where('payment_status','Paid')->sum('payment_balance'); 
        $total_chart = $this->chartData();
        return view('admin/dashboard', compact('user', 'totalBranch', 'totalManager', 'totalCompanyIncome', 'total_chart'));
    }

    public function chartData() {

        $companyIncomeStatistics = CourierInfo::whereYear('created_at', '=', date('Y'))->where('payment_status', 'Paid')->get()->groupBy(function($d) {
            return $d->created_at->format('F');
        });

        $monthly_chart = collect([]);

        foreach (month_arr() as $key => $value) {

            $monthly_chart->push([
                'month' => Carbon::parse(date('Y') . '-' . $key)->format('Y-m'),
                'income' => $companyIncomeStatistics->has($value) ? $companyIncomeStatistics[$value]->sum('payment_balance') : 0,
            ]);
        }

        return response()->json($monthly_chart->toArray())->content();
    }

    /**
     * Function changePassword
     * This method is used for change admin password
     * 
     * @access public
     * @return change password blade view page
     *
     * @last-modified 08/12/18
     */
    public function changePassword() {
        return view('admin/changePassword');
    }

    /**
     * Function updatePassword
     * This method is used for update  password
     * 
     * @access public
     * @return update action status
     *
     * @last-modified 08/12/18
     */
    public function updatePassword(Request $request) {
        $niceName = [
            'oldword' => 'Current Password',
            'newword' => 'New Password',
            'newword_confirmation' => 'Re-type password',
        ];
        $rules = [
            'oldword' => 'required',
            'newword' => 'required|min:4|confirmed',
            'newword_confirmation' => 'required',
        ];
        $customMessages = [
            'required' => 'The :attribute field is required.',
            'min' => 'Password must be 4 char',
        ];
        $this->validate($request, $rules, $customMessages, $niceName);
        $errors = [];
        //checking current password incorrect or correct
        $profile = Auth::guard('admin')->user();
        if (!Hash::check(Input::get('oldword'), $profile->password)) {
            $errors['oldword'] = "Currernt password incorrect";
        }
        //checking new password is same as old password
        if (Hash::check(Input::get('newword'), $profile->password)) {
            $errors['newword'] = "This password is already used before. Try with a different one";
        }
        //find erros & redirect back with error message
        if (count($errors) > 0) {
            return redirect()->back()->withInput()->withErrors($errors)->withError('errorArray', 'Array Error Occured');
        } else {
            //bcrypt passwrod 
            $profile->password = bcrypt(Input::get('newword'));
            $profile->save();
            return back()->withSuccess('Password updated successfully');
        }
    }

    /**
     * Function profileView
     * This method is used for view profile information
     * 
     * @access public
     * @return profile view blade page
     *
     * @last-modified 08/12/18
     */
    public function profileView() {
        return view('admin/profile');
    }

    /**
     * Function updateProfile
     * This method is used for update profile information
     * 
     * @access public
     * @return 
     *
     * @last-modified 08/12/18
     */
    public function updateProfile(Request $request) {
        $request->validate([
            'name' => 'required|max:50',
            'email' => ['required',
                Rule::unique('admins')->ignore(Auth::guard('admin')->user()->id), 'email'
            ],
            'image' => 'image|mimes:jpeg,png,jpg|max:5120',
        ]);

        $profile = Auth::guard('admin')->user();

        if ($request->hasFile('image')) {
            if ($profile->image) {
                unlink('assets/admin/img/' . $profile->image);
            }
            $image = $request->image;
            $imageObj = Image::make($image);
            $imageObj->save('assets/admin/img/' . $image->hashname());
            $profile->image = $image->hashname();
        }

        $profile->name = $request->get('name');
        $profile->email = $request->get('email');

        $profile->save();

        return back()->withSuccess('Profile updated successfully');
    }

}
