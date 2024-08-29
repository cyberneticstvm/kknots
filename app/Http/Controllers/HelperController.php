<?php

namespace App\Http\Controllers;

use App\Models\Caste;
use App\Models\Occupation;
use App\Models\ProfileSetting;
use App\Models\ProfileSettingDetail;
use App\Models\Qualification;
use App\Models\Religion;
use App\Models\Subcaste;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast;

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

    public function extras()
    {
        $religons = Religion::orderBy('name')->get();
        $casts = Caste::orderBy('name')->whereNot('name', 'Other')->get();
        $subcasts = Subcaste::orderBy('name')->get();
        return view('admin.extras.index', compact('religons', 'casts', 'subcasts'));
    }

    public function updateExtras(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        try {
            switch ($request->type):
                case 'caste':
                    Caste::insert(['name' => $request->name, 'religion_id' => $request->religion]);
                    break;
                case 'subcaste':
                    $rid = Caste::findOrFail($request->caste);
                    Subcaste::insert(['name' => $request->name, 'religion_id' => $rid->religion_id, 'cast_id' => $request->caste]);
                    break;
                default:
                    if ($request->category == 1):
                        Religion::insert(['name' => $request->name]);
                    endif;
                    if ($request->category == 2):
                        Occupation::insert(['name' => $request->name]);
                    endif;
                    if ($request->category == 3):
                        Qualification::insert(['name' => $request->name]);
                    endif;
            endswitch;
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->back()->with("success", "Data updated successfully.");
    }
}
