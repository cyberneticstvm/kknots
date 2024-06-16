<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Plan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function registration()
    {
        $inputs = array(date('Y-m-d'), date('Y-m-d'), $plan = '');
        $data = collect();
        $plans = Plan::pluck('name', 'id');
        return view('admin.report.registration', compact('inputs', 'data', 'plans'));
    }

    public function registrationFetch(Request $request)
    {
        $request->validate([
            'from_date' => 'required|date',
            'to_date' => 'required|date'
        ]);
        $inputs = array($request->from_date, $request->to_date, $request->plan);
        $plans = Plan::pluck('name', 'id');
        $data = User::withTrashed()->whereBetween('created_at', [Carbon::parse($request->from_date)->startOfDay(), Carbon::parse($request->to_date)->endOfDay()])->where('role', 21)->when($request->plan, function ($q) use ($request) {
            return $q->where('plan', $request->plan);
        })->latest()->get();
        return view('admin.report.registration', compact('inputs', 'data', 'plans'));
    }

    public function payment()
    {
        $inputs = array(date('Y-m-d'), date('Y-m-d'), $plan = '');
        $plans = Plan::pluck('name', 'id');
        $data = collect();
        return view('admin.report.payment', compact('inputs', 'data', 'plans'));
    }

    public function paymentFetch(Request $request)
    {
        $request->validate([
            'from_date' => 'required|date',
            'to_date' => 'required|date'
        ]);
        $inputs = array($request->from_date, $request->to_date, $request->plan);
        $plans = Plan::pluck('name', 'id');
        $data = Payment::withTrashed()->whereBetween('created_at', [Carbon::parse($request->from_date)->startOfDay(), Carbon::parse($request->to_date)->endOfDay()])->when($request->plan, function ($q) use ($request) {
            return $q->where('plan_id', $request->plan);
        })->latest()->get();
        return view('admin.report.payment', compact('inputs', 'data', 'plans'));
    }
}
