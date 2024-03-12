<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Caste;
use App\Models\District;
use App\Models\Extra;
use App\Models\Income;
use App\Models\Occupation;
use App\Models\ProfileSetting;
use App\Models\ProfileSettingDetail;
use App\Models\Qualification;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $qualifications = Qualification::pluck('name', 'id');
        $casts = Caste::whereNotIn('name', ['Other'])->pluck('name', 'id');
        return view('user.profile', compact('extras', 'districts', 'profile', 'occupations', 'incomes', 'qualifications', 'casts'));
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'profile_photo' => 'nullable|mimes:jpg,jpeg,png,webp|max:512',
            'horoscope' => 'nullable|mimes:pdf,doc,docx|max:512',
        ]);
        $profile = ProfileSetting::where('user_id', Auth::id())->firstOrFail();
        try {
            $input = $request->except(array('name', 'gender', 'dob', 'email', 'mobile', 'referral_code', 'interests', 'habits', 'photos'));
            $input1 = $request->only(array('name', 'gender', 'dob', 'email', 'mobile', 'referral_code'));
            if ($request->file('profile_photo')) :
                $main_img = uploadFile($request->file('profile_photo'), $path = 'profile/' . $profile->user_id . '/photos');
                $input['profile_photo'] = $main_img;
            endif;
            if ($request->file('horoscope')) :
                $hs = uploadFile($request->file('horoscope'), $path = 'profile/' . $profile->user_id . '/horoscope');
                $input['horoscope'] = $hs;
            endif;
            $habits = [];
            $interests = [];
            foreach ($request->habits as $key => $habit) :
                $habits[] = [
                    'profile_setting_id' => $profile->id,
                    'name' => $habit,
                    'category' => 'habit',
                ];
            endforeach;
            foreach ($request->interests as $key => $interest) :
                $interests[] = [
                    'profile_setting_id' => $profile->id,
                    'name' => $interest,
                    'category' => 'interest',
                ];
            endforeach;
            DB::transaction(function () use ($input, $input1, $profile, $request, $interests, $habits) {
                User::findOrFail($profile->user_id)->update($input1);
                $profile->update($input);
                if ($request->file('photos')) :
                    $images = $request->file('photos');
                    foreach ($images as $key => $item) :
                        $img = uploadFile($item, $path = 'profile/' . $profile->user_id . '/photos');
                        ProfileSettingDetail::insert([
                            'profile_setting_id' => $profile->id,
                            'name' => $img,
                            'category' => 'photo',
                        ]);
                    endforeach;
                endif;
                ProfileSettingDetail::where('profile_setting_id', $profile->id)->where('category', 'habit')->delete();
                ProfileSettingDetail::where('profile_setting_id', $profile->id)->where('category', 'interest')->delete();
                ProfileSettingDetail::insert($habits);
                ProfileSettingDetail::insert($interests);
            });
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->back()->with("success", "Profile updated successfully.");
    }

    function removeProfilePhoto()
    {
        $profile = ProfileSetting::where('user_id', Auth::id())->firstOrFail();
        $profile->update(['profile_photo' => NULL]);
        return redirect()->back()->with("success", "Profile photo removed successfully.");
    }

    function removeOtherPhoto(string $id)
    {
        $profile = ProfileSettingDetail::findOrFail(decrypt($id))->delete();
        return redirect()->back()->with("success", "User photo removed successfully.");
    }

    public function removeHoroscope()
    {
        $profile = ProfileSetting::where('user_id', Auth::id())->firstOrFail();
        $profile->update(['horoscope' => NULL]);
        return redirect()->back()->with("success", "Horoscope removed successfully.");
    }
}
