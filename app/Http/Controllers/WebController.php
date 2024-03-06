<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('index');
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
}
