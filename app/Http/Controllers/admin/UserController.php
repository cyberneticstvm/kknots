<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Extra;
use App\Models\ProfileSetting;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staffs = User::whereNotIn('role', [21])->withTrashed()->latest()->get();
        return view('admin.staff.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Extra::whereNotIn('id', [21])->where('category', 'role')->pluck('name', 'id');
        $partners = User::where('role', 22)->pluck('name', 'id');
        return view('admin.staff.create', compact('roles', 'partners'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'mobile' => 'required|numeric|digits:10|unique:users,mobile',
            'email' => 'required',
            'role' => 'required',
            'partner_id' => 'required_if:role,==,23',
        ]);
        try {
            $input = $request->all();
            $input['password'] = Hash::make($request->mobile);
            $input['referral_code'] = random_int(100000, 999999);
            DB::transaction(function () use ($input) {
                $user = User::create($input);
                ProfileSetting::insert([
                    'user_id' => $user->id,
                ]);
            });
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->route('admin.manage.staff')->with("success", "User created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $staff = User::findOrFail(decrypt($id));
        $roles = Extra::whereNotIn('id', [21])->where('category', 'role')->pluck('name', 'id');
        $partners = User::where('role', 22)->pluck('name', 'id');
        return view('admin.staff.edit', compact('roles', 'partners', 'staff'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'mobile' => 'required|numeric|digits:10|unique:users,mobile,' . $id,
            'email' => 'required',
            'role' => 'required',
            'partner_id' => 'required_if:role,==,23',
        ]);
        try {
            $input = $request->all();
            User::findOrFail($id)->update($input);
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->route('admin.manage.staff')->with("success", "User updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::findOrFail(decrypt($id))->delete();
        return redirect()->route('admin.manage.staff')->with("success", "User deleted successfully.");
    }
}
