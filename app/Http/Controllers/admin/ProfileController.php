<?php

namespace App\Http\Controllers\admin;

use App\Exports\ProfileExport;
use App\Http\Controllers\Controller;
use App\Models\Extra;
use App\Models\Payment;
use App\Models\Plan;
use App\Models\ProfileSetting;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Maatwebsite\Excel\Facades\Excel;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = User::whereIn('role', [21])->withTrashed()->latest()->get();
        return view('admin.profile.index', compact('profiles'));
    }

    public function profileExport()
    {
        return Excel::download(new ProfileExport(), 'profiles.xlsx');
    }

    public function plans()
    {
        $plans = Plan::all();
        return view('admin.plan.index', compact('plans'));
    }

    public function createPlan()
    {
        //
    }

    public function editPlan(string $id)
    {
        $plan = Plan::findOrFail(decrypt($id));
        return view('admin.plan.edit', compact('plan'));
    }

    public function updatePlan(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'validity' => 'required',
            'price' => 'required',
            'profiles_allowed' => 'required',
        ]);
        Plan::findOrFail($id)->update([
            'name' => $request->name,
            'validity' => $request->validity,
            'price' => $request->price,
            'profiles_allowed' => $request->profiles_allowed,
        ]);
        return redirect()->route('admin.manage.plans')->with("success", "Plan updated successfully.");
    }

    public function payments()
    {
        $payments = Payment::withTrashed()->latest()->get();
        return view('admin.payment.index', compact('payments'));
    }

    public function createPayment(string $id)
    {
        $pmodes = Extra::where('category', 'pmode')->pluck('name', 'id');
        $profile = ProfileSetting::where('user_id', decrypt($id))->firstOrFail();
        $plans = Plan::all();
        return view('admin.payment.create', compact('pmodes', 'profile', 'plans'));
    }

    public function savePayment(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required',
            'payment_mode' => 'required',
            'plan_id' => 'required',
        ]);
        try {
            $input = $request->except('profile_name');
            $input['created_by'] = $request->user()->id;
            $input['updated_by'] = $request->user()->id;
            $input['user_id'] = decrypt($request->user_id);
            $input['profile_id'] = decrypt($request->profile_id);
            Payment::create($input);
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->route('admin.manage.payment')->with("success", "Payment recorded successfully.");
    }

    public function editPayment(string $id)
    {
        $payment = Payment::findOrFail(decrypt($id));
        $pmodes = Extra::where('category', 'pmode')->pluck('name', 'id');
        $plans = Plan::all();
        return view('admin.payment.edit', compact('pmodes', 'plans', 'payment'));
    }

    public function updatePayment(Request $request, string $id)
    {
        $this->validate($request, [
            'amount' => 'required',
            'payment_mode' => 'required',
            'plan_id' => 'required',
        ]);
        try {
            $input = $request->except('profile_name');
            $input['updated_by'] = $request->user()->id;
            $input['user_id'] = decrypt($request->user_id);
            $input['profile_id'] = decrypt($request->profile_id);
            Payment::findOrFail($id)->update($input);
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->route('admin.manage.payment')->with("success", "Payment updated successfully.");
    }

    public function deletePayment(string $id)
    {
        Payment::findOrFail(decrypt($id))->delete();
        return redirect()->route('admin.manage.payment')->with("success", "Payment deleted successfully.");
    }
}
