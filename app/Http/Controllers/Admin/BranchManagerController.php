<?php

namespace App\Http\Controllers\Admin;

use App\Model\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Model\CourierInfo;
use DB;

class BranchManagerController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {

        $searchtext = $request->search;
        $branchManagerList = User::where('type', '=', 'Manager')
                ->where(function($q) use($searchtext) {
                    $q->orWhere('name', 'LIKE', "%$searchtext%")
                    ->orWhere('email', 'LIKE', "%$searchtext%")
                    ->orWhere('phone', 'LIKE', "%$searchtext%");
                })
                ->paginate(10);
        return view('admin.branchManager.list', compact('branchManagerList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $branchList = Branch::all()->where('status', 'Active');
        return view('admin.branchManager.add', compact('branchList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $manager) {
        $request->validate([
            'branch_id' => 'required',
            'password' => 'required|min:4',
            'name' => 'required|max:50|unique:users',
            'email' => 'required|max:50|email|unique:users',
            'phone' => 'max:50',
            'image' => 'image|mimes:jpeg,png,jpg|max:5120',
        ]);
        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->image;
            $imageObj = Image::make($image);
            $imageObj->save('assets/admin/img/branchManager/' . $image->hashname());
            $data['image'] = $image->hashname();
        }

        if ($request->get('status')) {
            $data['status'] = "Active";
        } else {
            $data += ["status" => "Inactive"];
        }
        //password hash make
        $data['password'] = Hash::make($request->get('password'));

        $manager->create($data);

        return back()->withSuccess('Branch Manager created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(User $branchmanager) {
        $branchList = Branch::all()->where('status', 'Active');
        return view('admin.branchManager.edit', compact('branchmanager', 'branchList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $branchmanager) {
        $request->validate([
            'name' => ['required',
                Rule::unique('users')->ignore($branchmanager->id), 'max:50'
            ],
            'email' => ['required',
                Rule::unique('users')->ignore($branchmanager->id), 'email', 'max:50'
            ],
            'phone' => 'max:50',
            'image' => 'image|mimes:jpeg,png,jpg|max:5120',
        ]);
        $data = $request->all();
        if ($request->get('status')) {
            $data['status'] = "Active";
        } else {
            $data += ["status" => "Inactive"];
        }
        if ($request->hasFile('image')) {
            if ($branchmanager->image) {
                unlink('assets/admin/img/branchManager/' . $branchmanager->image);
            }
            $image = $request->image;
            $imageObj = Image::make($image);
            $imageObj->save('assets/admin/img/branchManager/' . $image->hashname());
            $data['image'] = $image->hashname();
        }
        $branchmanager->update($data);

        return back()->withSuccess('Branch manager updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy($branchmanager) {
        
    }

    public function changePassword(Request $request) {
        $niceName = [
            'newword' => 'New Password',
            'newword_confirmation' => 'Re-type password',
        ];
        $rules = [
            'newword' => 'required|min:4|confirmed',
            'newword_confirmation' => 'required',
        ];
        $customMessages = [
            'required' => 'The :attribute field is required.',
            'min' => 'Password must be 4 char',
        ];
        $this->validate($request, $rules, $customMessages, $niceName);

        $id = $request->get('id');
        //bcrypt passwrod 
        $manager = User::find($id);
        $manager->password = Hash::make($request->get('newword'));
        $manager->save();
        return back()->withSuccess('Password updated successfully');
    }

    public function companyIncome() {
        $branchList = Branch::all();
        return view('admin.companyIncome.branchlist', compact('branchList'));
    }

    public function branchIncome(Request $request, $branch) {

        $staff = $request->staff_id;
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        if (!empty($start_date) && !empty($end_date) && !empty($staff)) {
            $branchIncomeList = CourierInfo::where('payment_branch_id', $branch)
                            ->where(function($q) use($start_date, $end_date, $staff) {
                                $q->whereBetween('payment_date', [$start_date, $end_date])
                                ->where('payment_receiver_id', $staff);
                            })
                            ->select(DB::raw("*,SUM(payment_balance) as total_balance"))
                            ->groupBy('payment_date')->paginate(10);
        } elseif (!empty($start_date) && !empty($end_date)) {
            $branchIncomeList = CourierInfo::where('payment_branch_id', $branch)
                            ->where(function($q) use($start_date, $end_date) {
                                $q->whereBetween('payment_date', [$start_date, $end_date]);
                            })
                            ->select(DB::raw("*,SUM(payment_balance) as total_balance"))
                            ->groupBy('payment_date')->paginate(10);
        } elseif (!empty($staff)) {
            $branchIncomeList = CourierInfo::where('payment_branch_id', $branch)
                            ->where(function($q) use($staff) {
                                $q->where('payment_receiver_id', $staff);
                            })
                            ->select(DB::raw("*,SUM(payment_balance) as total_balance"))
                            ->groupBy('payment_date')->paginate(10);
        } else {
            $branchIncomeList = CourierInfo::where('payment_branch_id', $branch)
                            ->select(DB::raw("*,SUM(payment_balance) as total_balance"))
                            ->groupBy('payment_date')->paginate(10);
        }

        $branchName = Branch::find($branch);

        $branchStaff = User::where([['branch_id', $branch], ['type', 'Staff']])->get();

        return view('admin.companyIncome.branchIncomeList', compact('branchIncomeList', 'branchName', 'branch', 'branchStaff'));
    }

    public function dateWiseBranchIncome($branch, $date) {
        $branchIncomeList = CourierInfo::where('payment_branch_id', $branch)->whereDate('payment_date', $date)
                        ->select(DB::raw("*,SUM(payment_balance) as total_balance"))
                        ->groupBy('payment_receiver_id')->paginate(10);
        $branchName = Branch::find($branch);
        return view('admin.companyIncome.dateIncomeList', compact('branchIncomeList', 'branchName', 'branch'));
    }

    public function staffWiseBranchIncome($branch, $staff) {

        $branchIncomeList = CourierInfo::where([['payment_branch_id', $branch], ['payment_receiver_id', $staff]])
                        ->select(DB::raw("*,SUM(payment_balance) as total_balance"))
                        ->groupBy('payment_date')->paginate(10);

        $branchName = Branch::find($branch);

        return view('admin.companyIncome.staffIncomeList', compact('branchIncomeList', 'branchName', 'branch'));
    }

}
