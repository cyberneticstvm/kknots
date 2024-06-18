<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProfileSetting;
use App\Models\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
                return redirect()->route('index')
                    ->withSuccess('User logged in successfully');
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
            'terms' => 'accepted',
        ]);
        try {
            $input = $request->except(array('password_confirmation', 'terms'));
            $input['plan'] = 1;
            $input['role'] = 21;
            DB::transaction(function () use ($input) {
                $user = User::create($input);
                ProfileSetting::insert([
                    'user_id' => $user->id,
                ]);
            });
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->back()->with("success", "User registered successfully.");
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
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->back()->with("success", "Password reset link successfully sent to your email.");
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
