<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function registration()
    {
        $inputs = array(date('Y-m-d'), date('Y-m-d'), $plan = '');
        $data = collect();
        return view('admin.report.registration', compact('inputs', 'data'));
    }

    public function registrationFetch()
    {
        $inputs = array(date('Y-m-d'), date('Y-m-d'), $plan = '');
        $data = collect();
        return view('admin.report.registration', compact('inputs', 'data'));
    }

    public function payment()
    {
        $inputs = array(date('Y-m-d'), date('Y-m-d'), $plan = '');
        $data = collect();
        return view('admin.report.payment', compact('inputs', 'data'));
    }

    public function paymentFetch()
    {
        $inputs = array(date('Y-m-d'), date('Y-m-d'), $plan = '');
        $data = collect();
        return view('admin.report.payment', compact('inputs', 'data'));
    }
}
