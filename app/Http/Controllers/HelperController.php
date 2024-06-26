<?php

namespace App\Http\Controllers;

use App\Models\ProfileSetting;
use App\Models\ProfileSettingDetail;
use App\Models\User;
use Illuminate\Http\Request;

class HelperController extends Controller
{
    public function profile($id)
    {
        $profile = User::findOrFail(decrypt($id));
        $related = User::where('role', 21)->whereNot('id', decrypt($id))->where('religion', $profile->religion)->where('gender', $profile->gender)->inRandomOrder()->limit(10)->get();
        $settings = ProfileSetting::where('user_id', $profile->id)->first();
        $handi = ProfileSettingDetail::where('profile_setting_id', $settings->id)->whereIn('category', ['habit', 'interest'])->get();
        return view('profile', compact('profile', 'related', 'settings', 'handi'));
    }
}
