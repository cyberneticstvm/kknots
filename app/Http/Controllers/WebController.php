<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use App\Models\Religion;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if (Auth::id()) :
            if (Auth::user()->role == 21) :
                return redirect()->route('user.dashboard');
            else :
                return redirect()->route('admin.dashboard');
            endif;
        else :
            return view('login');
        endif;
    }

    public function register()
    {
        if (Auth::id()) :
            if (Auth::user()->role == 21) :
                return redirect()->route('user.dashboard');
            else :
                return redirect()->route('admin.dashboard');
            endif;
        else :
            $gender = Extra::where('category', 'gender')->pluck('name', 'id');
            $hows = Extra::where('category', 'how_to_know')->pluck('name', 'id');
            $profile_for = Extra::where('category', 'profile_for')->pluck('name', 'id');
            return view('register', compact('gender', 'hows', 'profile_for'));
        endif;
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

    public function about()
    {
        return view('about');
    }

    public function browseProfile()
    {
        $extras = Extra::all();
        $religions = Religion::all();
        $states = State::all();
        return view('browse', compact('extras', 'religions', 'states'));
    }

    public function wedding()
    {
        return view('wedding');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function contact()
    {
        return view('contact');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function terms()
    {
        return view('terms');
    }
}
