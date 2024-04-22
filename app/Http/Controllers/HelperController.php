<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HelperController extends Controller
{
    public function profile($id)
    {
        $profile = User::findOrFail(decrypt($id));
        return view('profile', compact('profile'));
    }
}
