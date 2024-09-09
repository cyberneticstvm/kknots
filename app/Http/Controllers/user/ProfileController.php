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
use App\Models\Religion;
use App\Models\Star;
use App\Models\State;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function dashboard()
    {
        $user = User::findOrFail(Auth::id());
        $extras = Extra::all();
        $religions = Religion::all();
        $states = State::all();
        return view('user.dashboard', compact('user', 'extras', 'religions', 'states'));
    }

    public function myProfile()
    {
        $user = User::findOrFail(Auth::id());
        return view('user.my-profile', compact('user'));
    }

    public function editProfile(string $id)
    {
        $extras = Extra::orderBy('name')->get();
        $districts = District::orderBy('name')->pluck('name', 'id');
        $states = State::orderBy('name')->get();
        $profile = ProfileSetting::where('user_id', decrypt($id))->firstOrFail();
        $occupations = Occupation::orderBy('name')->pluck('name', 'id');
        $incomes = Income::orderBy('name')->pluck('name', 'id');
        $qualifications = Qualification::orderBy('name')->pluck('name', 'id');
        $casts = Caste::whereNotIn('name', ['Other'])->orderBy('name')->pluck('name', 'id');
        $religions = Religion::orderBy('name')->get();
        $stars = Star::orderBy('id')->get();
        return view('user.profile', compact('extras', 'districts', 'states', 'profile', 'occupations', 'incomes', 'qualifications', 'casts', 'religions', 'stars'));
    }

    public function updateProfile(Request $request, string $id)
    {
        $this->validate($request, [
            'profile_photo' => 'nullable|mimes:jpg,jpeg,png,webp|max:512',
            'horoscope' => 'nullable|mimes:pdf,doc,docx|max:512',
        ]);
        $profile = ProfileSetting::findOrFail($id);
        try {
            $input = $request->except(array('name', 'gender', 'dob', 'email', 'mobile', 'whatsapp_number', 'verified', 'cast_other', 'referral_code', 'my_habit_drinking', 'partner_habit_drinking', 'photos', 'caste', 'religion', 'my_habit_smoking', 'partner_habit_smoking', 'my_habit_tv', 'partner_habit_tv', 'my_habit_social', 'partner_habit_social', 'my_habit_food', 'partner_habit_food', 'my_habit_reading', 'partner_habit_reading', 'my_habit_movie', 'partner_habit_movie', 'my_habit_language', 'partner_habit_language', 'my_habit_friend', 'partner_habit_friend'));
            $input1 = $request->only(array('name', 'gender', 'dob', 'email', 'mobile', 'whatsapp_number', 'referral_code', 'caste', 'religion', 'verified', 'cast_other'));
            if ($request->file('profile_photo')) :
                $main_img = uploadFile($request->file('profile_photo'), $path = 'profile/' . $profile->user_id . '/photos');
                $input['profile_photo'] = $main_img;
            endif;
            if ($request->file('horoscope')) :
                $hs = uploadFile($request->file('horoscope'), $path = 'profile/' . $profile->user_id . '/horoscope');
                $input['horoscope'] = $hs;
            endif;
            $data = [];
            if ($request->my_habit_drinking) :
                foreach ($request->my_habit_drinking as $key => $item) :
                    $data[] = [
                        'profile_setting_id' => $profile->id,
                        'name' => $item,
                        'category' => 'user',
                    ];
                endforeach;
            endif;
            if ($request->partner_habit_drinking) :
                foreach ($request->partner_habit_drinking as $key => $item) :
                    $data[] = [
                        'profile_setting_id' => $profile->id,
                        'name' => $item,
                        'category' => 'partner',
                    ];
                endforeach;
            endif;
            if ($request->my_habit_smoking) :
                foreach ($request->my_habit_smoking as $key => $item) :
                    $data[] = [
                        'profile_setting_id' => $profile->id,
                        'name' => $item,
                        'category' => 'user',
                    ];
                endforeach;
            endif;
            if ($request->partner_habit_smoking) :
                foreach ($request->partner_habit_smoking as $key => $item) :
                    $data[] = [
                        'profile_setting_id' => $profile->id,
                        'name' => $item,
                        'category' => 'partner',
                    ];
                endforeach;
            endif;
            if ($request->my_habit_tv) :
                foreach ($request->my_habit_tv as $key => $item) :
                    $data[] = [
                        'profile_setting_id' => $profile->id,
                        'name' => $item,
                        'category' => 'user',
                    ];
                endforeach;
            endif;
            if ($request->partner_habit_tv) :
                foreach ($request->partner_habit_tv as $key => $item) :
                    $data[] = [
                        'profile_setting_id' => $profile->id,
                        'name' => $item,
                        'category' => 'partner',
                    ];
                endforeach;
            endif;
            if ($request->my_habit_social) :
                foreach ($request->my_habit_social as $key => $item) :
                    $data[] = [
                        'profile_setting_id' => $profile->id,
                        'name' => $item,
                        'category' => 'user',
                    ];
                endforeach;
            endif;
            if ($request->partner_habit_social) :
                foreach ($request->partner_habit_social as $key => $item) :
                    $data[] = [
                        'profile_setting_id' => $profile->id,
                        'name' => $item,
                        'category' => 'partner',
                    ];
                endforeach;
            endif;
            if ($request->my_habit_food) :
                foreach ($request->my_habit_food as $key => $item) :
                    $data[] = [
                        'profile_setting_id' => $profile->id,
                        'name' => $item,
                        'category' => 'user',
                    ];
                endforeach;
            endif;
            if ($request->partner_habit_food) :
                foreach ($request->partner_habit_food as $key => $item) :
                    $data[] = [
                        'profile_setting_id' => $profile->id,
                        'name' => $item,
                        'category' => 'partner',
                    ];
                endforeach;
            endif;
            if ($request->my_habit_reading) :
                foreach ($request->my_habit_reading as $key => $item) :
                    $data[] = [
                        'profile_setting_id' => $profile->id,
                        'name' => $item,
                        'category' => 'user',
                    ];
                endforeach;
            endif;
            if ($request->partner_habit_reading) :
                foreach ($request->partner_habit_reading as $key => $item) :
                    $data[] = [
                        'profile_setting_id' => $profile->id,
                        'name' => $item,
                        'category' => 'partner',
                    ];
                endforeach;
            endif;
            if ($request->my_habit_movie) :
                foreach ($request->my_habit_movie as $key => $item) :
                    $data[] = [
                        'profile_setting_id' => $profile->id,
                        'name' => $item,
                        'category' => 'user',
                    ];
                endforeach;
            endif;
            if ($request->partner_habit_movie) :
                foreach ($request->partner_habit_movie as $key => $item) :
                    $data[] = [
                        'profile_setting_id' => $profile->id,
                        'name' => $item,
                        'category' => 'partner',
                    ];
                endforeach;
            endif;
            if ($request->my_habit_language) :
                foreach ($request->my_habit_language as $key => $item) :
                    $data[] = [
                        'profile_setting_id' => $profile->id,
                        'name' => $item,
                        'category' => 'user',
                    ];
                endforeach;
            endif;
            if ($request->partner_habit_language) :
                foreach ($request->partner_habit_language as $key => $item) :
                    $data[] = [
                        'profile_setting_id' => $profile->id,
                        'name' => $item,
                        'category' => 'partner',
                    ];
                endforeach;
            endif;
            if ($request->my_habit_friend) :
                foreach ($request->my_habit_friend as $key => $item) :
                    $data[] = [
                        'profile_setting_id' => $profile->id,
                        'name' => $item,
                        'category' => 'user',
                    ];
                endforeach;
            endif;
            if ($request->partner_habit_friend) :
                foreach ($request->partner_habit_friend as $key => $item) :
                    $data[] = [
                        'profile_setting_id' => $profile->id,
                        'name' => $item,
                        'category' => 'partner',
                    ];
                endforeach;
            endif;
            DB::transaction(function () use ($input, $input1, $profile, $request, $data) {
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
                ProfileSettingDetail::where('profile_setting_id', $profile->id)->whereIn('category', ['user', 'partner'])->delete();
                ProfileSettingDetail::insert($data);
            });
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->back()->with("success", "Profile updated successfully.");
    }

    function removeProfilePhoto(string $id)
    {
        $profile = ProfileSetting::findOrFail(decrypt($id));
        $profile->update(['profile_photo' => NULL]);
        return redirect()->back()->with("success", "Profile photo removed successfully.");
    }

    function removeOtherPhoto(string $id)
    {
        $profile = ProfileSettingDetail::findOrFail(decrypt($id))->delete();
        return redirect()->back()->with("success", "User photo removed successfully.");
    }

    public function removeHoroscope(string $id)
    {
        $profile = ProfileSetting::findOrFail(decrypt($id));
        $profile->update(['horoscope' => NULL]);
        return redirect()->back()->with("success", "Horoscope removed successfully.");
    }

    public function settings()
    {
        $settings = ProfileSetting::where('user_id', Auth::id())->first();
        return view('user.settings', compact('settings'));
    }

    public function settingsUpdate(Request $request)
    {
        ProfileSetting::where('user_id', Auth::id())->update([
            'show_profile_photo' => $request->photo,
            'show_address' => $request->address,
            'show_email' => $request->email,
            'show_contact_number' => $request->mobile,
            'intro_video_url' => $request->intro_video_url,
            'updated_at' => Carbon::now(),
        ]);
        if ($request->password) :
            User::findOrFail(Auth::id())->update([
                'password' => Hash::make($request->password),
            ]);
        endif;
        return redirect()->back()->with("success", "Profile settings updated successfully.");
    }

    public function closeAccount(string $id)
    {
        User::findOrFail(decrypt($id))->delete();
        return redirect()->back()->with("success", "Profile closed successfully.");
    }
}
