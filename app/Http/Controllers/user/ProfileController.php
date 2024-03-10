<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Caste;
use App\Models\District;
use App\Models\Extra;
use App\Models\Income;
use App\Models\Occupation;
use App\Models\ProfileSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function editProfile()
    {
        $extras = Extra::all();
        $districts = District::pluck('name', 'id');
        $profile = ProfileSetting::where('user_id', Auth::id())->firstOrFail();
        $occupations = Occupation::pluck('name', 'id');
        $incomes = Income::pluck('name', 'id');
        $qualifications = Income::pluck('name', 'id');
        $casts = Caste::whereNotIn('name', ['Other'])->pluck('name', 'id');
        return view('user.profile', compact('extras', 'districts', 'profile', 'occupations', 'incomes', 'qualifications', 'casts'));
    }
}
