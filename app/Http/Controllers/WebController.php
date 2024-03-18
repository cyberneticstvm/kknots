<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use App\Models\Religion;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $extras = Extra::all();
        $religions = Religion::all();
        $states = State::all();
        return view('index', compact('extras', 'religions', 'states'));
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        $gender = Extra::where('category', 'gender')->pluck('name', 'id');
        $hows = Extra::where('category', 'how_to_know')->pluck('name', 'id');
        return view('register', compact('gender', 'hows'));
    }

    public function searchProfile(Request $request)
    {
        $extras = Extra::all();
        $religions = Religion::all();
        $states = State::all();
        $inputs = array($request->gender, $request->age, $request->religion, $request->location);
        $profiles = User::where('role', 21)->where('gender', $request->gender)->get();
        return view('profiles', compact('extras', 'religions', 'states', 'inputs', 'profiles'));
    }
}
