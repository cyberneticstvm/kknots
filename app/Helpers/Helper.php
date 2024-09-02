<?php

use App\Models\User;
use App\Models\AdminSetting;
use Illuminate\Support\Facades\Auth;

function uploadFile($file, $path)
{
    $fname = time() . '_' . $file->getClientOriginalName();
    $file->storeAs($path, $fname, 'public');
    return '/storage/' . $path . '/' . $fname;
}

function settings()
{
    return AdminSetting::findOrFail(1);
}
