<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\ForgotPassword;
use App\Mail\RegistrationNotification;
use App\Models\Payment;
use App\Models\ProfileSetting;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'mobile' => 'required|numeric|digits:10',
            'password' => 'required',
        ]);
        try {
            $credentials = $request->only('mobile', 'password');
            if (Auth::attempt($credentials, $request->remember)) {
                if (Auth::user()->role == 21) :
                    return redirect()->route('user.profile.edit', encrypt(Auth::user()->id))
                        ->withSuccess('User logged in successfully');
                else :
                    return redirect()->route('admin.dashboard')
                        ->withSuccess('User logged in successfully');
                endif;
            }
            return redirect()->back()->with("error", "Invalid Credentials")->withInput($request->all());
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with("success", "User logged out successfully");
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'mobile' => 'required|numeric|digits:10|unique:users,mobile',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required',
            'referral_code' => 'nullable|exists:users,referral_code',
            'how_to_know' => 'required',
            'profile_for' => 'required',
            'terms' => 'accepted',
        ]);
        try {
            $exist = User::where('role', 21)->where('name', $request->name)->where('gender', $request->gender)->where('dob', $request->dob)->first();
            if (Carbon::parse($request->dob)->age < 18)
                throw new Exception("Age should be greater than or equal to 18");
            if ($exist)
                throw new Exception("Profile seems to be exists already!");
            $input = $request->except(array('password_confirmation', 'terms'));
            $input['plan'] = 1;
            $input['role'] = 21;
            $user = collect();
            DB::transaction(function () use ($input) {
                $user = User::create($input);
                ProfileSetting::insert([
                    'user_id' => $user->id,
                ]);
                Mail::to(settings()->contact_email)->send(new RegistrationNotification($user));
            });
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->route('login')->with("success", "User registered successfully.");
    }

    public function forgotPassword()
    {
        return view('forgot-password');
    }

    public function sendPwdResetEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]);
        try {
            $user = User::where('email', $request->email)->firstOrFail();
            Mail::to($user->email)->send(new ForgotPassword($user));
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->back()->with("success", "Password reset link successfully sent to your email.");
    }

    public function resetPassword($token)
    {
        $user = User::findOrFail(decrypt($token));
        return view('reset-password', compact('user'));
    }

    public function resetPasswordUpdate(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required',
        ]);
        try {
            User::where('id', decrypt($request->user_id))->update(['password' => bcrypt($request->password)]);
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage())->withInput($request->all());
        }
        return redirect()->route('login')->with("success", "Password has been reset successfully");
    }

    public function dashboard()
    {
        $profiles = User::where('role', 21)->get();
        $collection = Payment::all();
        $current_month_collection = Payment::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->sum('amount');
        $current_month_profiles = User::where('role', 21)->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->count();
        $current_month_profiles_male = User::where('role', 21)->where('gender', 1)->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->count();
        $current_month_profiles_female = User::where('role', 21)->where('gender', 2)->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->count();
        return view('admin.dashboard', compact('profiles', 'collection', 'current_month_collection', 'current_month_profiles', 'current_month_profiles_male', 'current_month_profiles_female'));
    }
}
