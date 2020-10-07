<?php

namespace App\Http\Controllers\Manager;

use App\Model\CourierInfo;
use App\Model\CourierType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Branch;
use Illuminate\Support\Facades\Auth;
use App\Model\GeneralSetting;
use App\Model\CourierProductInfo;
use Illuminate\Support\Str;
use App\User;
use DB;

class CompanyPaymentController extends Controller {

    public function branchWiseIncome(Request $request) {

        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $staff = $request->staff_id;

        if (!empty($start_date) && !empty($end_date) && !empty($staff)) {
            $branchIncomeList = CourierInfo::where('payment_branch_id', Auth::user()->branch_id)
                            ->where(function($q) use($start_date, $end_date, $staff) {
                                $q->whereBetween('payment_date', [$start_date, $end_date])
                                ->where('payment_receiver_id', $staff);
                            })
                            ->select(DB::raw("*,SUM(payment_balance) as total_balance"))
                            ->groupBy('payment_date')->paginate(10);
        } elseif (!empty($start_date) && !empty($end_date)) {
            $branchIncomeList = CourierInfo::where('payment_branch_id', Auth::user()->branch_id)
                            ->where(function($q) use($start_date, $end_date) {
                                $q->whereBetween('payment_date', [$start_date, $end_date]);
                            })
                            ->select(DB::raw("*,SUM(payment_balance) as total_balance"))
                            ->groupBy('payment_date')->paginate(10);
        } elseif (!empty($staff)) {
            $branchIncomeList = CourierInfo::where('payment_branch_id', Auth::user()->branch_id)
                            ->where(function($q) use($staff) {
                                $q->where('payment_receiver_id', $staff);
                            })
                            ->select(DB::raw("*,SUM(payment_balance) as total_balance"))
                            ->groupBy('payment_date')->paginate(10);
        } else {

            $branchIncomeList = CourierInfo::where('payment_branch_id', Auth::user()->branch_id)
                            ->select(DB::raw("*,SUM(payment_balance) as total_balance"))
                            ->groupBy('payment_date')->paginate(10);
        }
        $branchStaff = User::where([['branch_id', Auth::user()->branch_id], ['type', 'Staff']])->get();
        return view('manager.branchIncome.list', compact('branchIncomeList','branchStaff'));
    }

    public function dateWiseBranchIncome(Request $request, $date) {

        $staff = $request->search;

        if (!empty($staff)) {
            $branchIncomeList = CourierInfo::where('payment_branch_id', Auth::user()->branch_id)
                            ->whereDate('payment_date', $date)
                            ->select(DB::raw("*,SUM(payment_balance) as total_balance"))
                            ->groupBy('payment_receiver_id')->paginate(10);
        } else {
            $branchIncomeList = CourierInfo::where('payment_branch_id', Auth::user()->branch_id)
                            ->whereDate('payment_date', $date)
                            ->select(DB::raw("*,SUM(payment_balance) as total_balance"))
                            ->groupBy('payment_receiver_id')->paginate(10);
        }

        return view('manager.branchIncome.dateIncome', compact('branchIncomeList', 'date'));
    }

    public function staffWiseBranchIncome($staff) {

        $branchIncomeList = CourierInfo::where([['payment_branch_id', Auth::user()->branch_id], ['payment_receiver_id', $staff]])
                ->paginate(10);
        return view('manager.branchIncome.staffIncome', compact('branchIncomeList'));
    }

}
